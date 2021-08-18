tsParticles.load("tsparticles", {
  fpsLimit: 60,
  particles: {
    number: {
      value: 0,
      density: {
        enable: true,
        value_area: 800
      }
    },
    color: {
      value: "#D7263D"
    },
    shape: {
      type: "circle"
    },
    opacity: {
      value: 1,
      random: false,
      animation: {
        enable: true,
        speed: 0.5,
        minimumValue: 0,
        sync: false
      }
    },
    size: {
      value: 10,
      random: { enable: true, minimumValue: 4 },
      animation: {
        enable: false,
        speed: 20,
        minimumValue: 4,
        sync: false
      }
    },
    move: {
      enable: true,
      gravity: {
        enable: true,
        acceleration: -0.5
      },
      speed: 5,
      direction: "top",
      random: false,
      straight: false,
      outModes: {
        default: "destroy",
        bottom: "none"
      },
      attract: {
        enable: true,
        distance: 300,
        rotate: {
          x: 600,
          y: 1200
        }
      }
    }
  },
  interactivity: {
    detectsOn: "canvas",
    events: {
      resize: true
    }
  },
  detectRetina: true,
  background: {
    color: "#1f1f1f"
  },
  emitters: [
    {
      direction: "top",
      particles: {
        color: "#D7263D"
      },
      rate: {
        quantity: 1,
        delay: 0.3
      },
      size: {
        width: 100,
        height: 10
      },
      position: {
        x: 50,
        y: 100
      }
    },
    {
      direction: "top",
      particles: {
        color: "#fff"
      },
      rate: {
        quantity: 1,
        delay: 0.3
      },
      size: {
        width: 100,
        height: 10
      },
      position: {
        x: 50,
        y: 100
      }
    }
  ]
});