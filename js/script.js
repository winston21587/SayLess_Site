tailwind.config = {
  theme: {
    extend: {
      colors: {
        background: "#09090b", // zinc-950
        surface: "#18181b", // zinc-900
        primary: "#fafafa", // zinc-50
        secondary: "#a1a1aa", // zinc-400
        accent: "#6366f1", // indigo-500
      },
      fontFamily: {
        sans: ["Inter", "sans-serif"],
      },
    },
  },
};

// WebGL Background Controller
class WaterShader {
  constructor() {
    this.canvas = document.getElementById("glCanvas");
    if (!this.canvas) return;

    this.gl = this.canvas.getContext("webgl");
    if (!this.gl) {
      console.error("WebGL not supported");
      return;
    }

    this.program = null;
    this.startTime = Date.now();
    this.init();
  }

  async init() {
    this.resize();
    window.addEventListener("resize", () => this.resize());

    // Vertex shader (simple pass-through)
    const vsSource = `
            attribute vec4 aVertexPosition;
            void main() {
                gl_Position = aVertexPosition;
            }
        `;

    // Load fragment shader
    try {
      const response = await fetch("shaders/water.frag");
      const fsSource = await response.text();

      const shaderProgram = this.initShaderProgram(this.gl, vsSource, fsSource);
      this.program = {
        program: shaderProgram,
        attribLocations: {
          vertexPosition: this.gl.getAttribLocation(
            shaderProgram,
            "aVertexPosition"
          ),
        },
        uniformLocations: {
          resolution: this.gl.getUniformLocation(shaderProgram, "u_resolution"),
          time: this.gl.getUniformLocation(shaderProgram, "u_time"),
        },
      };

      this.initBuffers();
      this.render();
    } catch (e) {
      console.error("Failed to load shader:", e);
    }
  }

  initShaderProgram(gl, vsSource, fsSource) {
    const vertexShader = this.loadShader(gl, gl.VERTEX_SHADER, vsSource);
    const fragmentShader = this.loadShader(gl, gl.FRAGMENT_SHADER, fsSource);

    const shaderProgram = gl.createProgram();
    gl.attachShader(shaderProgram, vertexShader);
    gl.attachShader(shaderProgram, fragmentShader);
    gl.linkProgram(shaderProgram);

    if (!gl.getProgramParameter(shaderProgram, gl.LINK_STATUS)) {
      console.error(
        "Unable to initialize the shader program: " +
          gl.getProgramInfoLog(shaderProgram)
      );
      return null;
    }
    return shaderProgram;
  }

  loadShader(gl, type, source) {
    const shader = gl.createShader(type);
    gl.shaderSource(shader, source);
    gl.compileShader(shader);

    if (!gl.getShaderParameter(shader, gl.COMPILE_STATUS)) {
      console.error(
        "An error occurred compiling the shaders: " +
          gl.getShaderInfoLog(shader) +
          "\nSource:\n" +
          source
      );
      gl.deleteShader(shader);
      return null;
    }
    return shader;
  }

  initBuffers() {
    const positionBuffer = this.gl.createBuffer();
    this.gl.bindBuffer(this.gl.ARRAY_BUFFER, positionBuffer);

    const positions = [-1.0, 1.0, 1.0, 1.0, -1.0, -1.0, 1.0, -1.0];

    this.gl.bufferData(
      this.gl.ARRAY_BUFFER,
      new Float32Array(positions),
      this.gl.STATIC_DRAW
    );
    this.positionBuffer = positionBuffer;
  }

  resize() {
    this.canvas.width = window.innerWidth;
    this.canvas.height = window.innerHeight;
    this.gl.viewport(0, 0, this.canvas.width, this.canvas.height);
  }

  render() {
    if (!this.program) return;

    const currentTime = (Date.now() - this.startTime) * 0.001; // Seconds

    this.gl.clearColor(0.0, 0.0, 0.0, 1.0);
    this.gl.clear(this.gl.COLOR_BUFFER_BIT);

    this.gl.useProgram(this.program.program);

    this.gl.bindBuffer(this.gl.ARRAY_BUFFER, this.positionBuffer);
    this.gl.vertexAttribPointer(
      this.program.attribLocations.vertexPosition,
      2,
      this.gl.FLOAT,
      false,
      0,
      0
    );
    this.gl.enableVertexAttribArray(
      this.program.attribLocations.vertexPosition
    );

    this.gl.uniform2f(
      this.program.uniformLocations.resolution,
      this.canvas.width,
      this.canvas.height
    );
    this.gl.uniform1f(this.program.uniformLocations.time, currentTime);

    this.gl.drawArrays(this.gl.TRIANGLE_STRIP, 0, 4);

    requestAnimationFrame(() => this.render());
  }
}

document.addEventListener("DOMContentLoaded", () => {
  new WaterShader();
});
