#ifdef GL_ES
precision mediump float;
#endif

uniform vec2 u_resolution;
uniform float u_time;

// Simply 2D noise
// Based on Morgan McGuire @morgan3d
// https://www.shadertoy.com/view/4dS3Wd
float noise (in vec2 st) {
    vec2 i = floor(st);
    vec2 f = fract(st);

    // Four corners in 2D of a tile
    float a = sin(dot(i, vec2(12.9898, 78.233))) * 43758.5453123;
    float b = sin(dot(i + vec2(1.0, 0.0), vec2(12.9898, 78.233))) * 43758.5453123;
    float c = sin(dot(i + vec2(0.0, 1.0), vec2(12.9898, 78.233))) * 43758.5453123;
    float d = sin(dot(i + vec2(1.0, 1.0), vec2(12.9898, 78.233))) * 43758.5453123;

    a = fract(a);
    b = fract(b);
    c = fract(c);
    d = fract(d);

    vec2 u = f * f * (3.0 - 2.0 * f);

    return mix(a, b, u.x) +
            (c - a)* u.y * (1.0 - u.x) +
            (d - b) * u.x * u.y;
}

#define OCTAVES 6
float fbm (in vec2 st) {
    // Initial values
    float value = 0.0;
    float amplitude = .5;
    float frequency = 0.;
    //
    // Loop of octaves
    for (int i = 0; i < OCTAVES; i++) {
        value += amplitude * noise(st);
        st *= 2.;
        amplitude *= .5;
    }
    return value;
}

void main() {
    vec2 st = gl_FragCoord.xy/u_resolution.xy;
    st.x *= u_resolution.x/u_resolution.y;

    vec3 color = vec3(0.0);
    
    // Domain warping pattern
    vec2 q = vec2(0.);
    q.x = fbm( st + 0.00*u_time);
    q.y = fbm( st + vec2(1.0));

    vec2 r = vec2(0.);
    r.x = fbm( st + 1.0*q + vec2(1.7,9.2)+ 0.15*u_time );
    r.y = fbm( st + 1.0*q + vec2(8.3,2.8)+ 0.126*u_time);

    float f = fbm(st+r);

    // "Chill water" colors - Zinc/Indigo theme
    // Dark base
    vec3 color1 = vec3(0.035, 0.035, 0.043); // zinc-950
    // Mid tone
    vec3 color2 = vec3(0.094, 0.094, 0.106); // zinc-900
    // Highlight/Accent
    vec3 color3 = vec3(0.388, 0.4, 0.945);   // indigo-500
    
    // Mix based on the fbm value
    color = mix(color1, color2, clamp((f*f)*4.0,0.0,1.0));
    color = mix(color, color3, clamp(length(q),0.0,1.0));
    color = mix(color, color3, clamp(length(r.x),0.0,1.0));

    // Soften and darken significantly for background use
    color = mix(color, vec3(0.035, 0.035, 0.043), 0.85);

    // Subtle vignette
    float vignette = 1.0 - smoothstep(0.5, 1.5, length(st - 0.5));
    color *= vignette;

    gl_FragColor = vec4((f*f*f+.6*f*f+.5*f)*color,1.);
}
