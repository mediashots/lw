// Main JavaScript File: main.js

document.addEventListener("DOMContentLoaded", () => {
  const header = document.querySelector("#header");
  const darkLogo = document.querySelector("#navbar-brand-logo-dark");
  const lightLogo = document.querySelector("#navbar-brand-logo");
  const navLinks = document.querySelectorAll(".nav-link");
  const mmenuToggle = document.querySelector("#mmenu-toggle");

   // Funktion: Logowechsel
   const updateLogo = () => {
    if (header.classList.contains('navbar-scrolled') || header.classList.contains('mmenu-open')) {
        lightLogo.style.display = 'none';
        darkLogo.style.display = 'block';
    } else {
        lightLogo.style.display = 'block';
        darkLogo.style.display = 'none';
    }
};

// Scroll-Event: Klasse 'navbar-scrolled' verwalten
document.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        header.classList.add('navbar-scrolled');
    } else {
        header.classList.remove('navbar-scrolled');
    }
    updateLogo(); // Logowechsel unabhängig von der Fensterbreite
});

  // Helper function: Update nav-link colors
  const updateNavLinkColors = (color) => {
    navLinks.forEach((link) => {
      link.style.color = color;
    });
  };

  // Scroll event: Update navbar state and logo
  const handleScroll = () => {
    if (window.scrollY > 50) {
      
      updateNavLinkColors("#222222");
    } else {
      
      updateNavLinkColors("white");
    }
    updateLogo();
  };

  // Dropdown toggle events
// Dropdown toggle events
const handleDropdownEvents = () => {
  const dropdowns = document.querySelectorAll(".dropdown-toggle");

  dropdowns.forEach((dropdown) => {
    // Event: Dropdown wird geöffnet
    dropdown.addEventListener("show.bs.dropdown", () => {
      updateNavLinkColors("#222222"); // Dunkle Farbe für sichtbare Dropdowns
      darkLogo.style.display = "block";
      lightLogo.style.display = "none";
    });

    // Event: Dropdown wird geschlossen
    dropdown.addEventListener("hide.bs.dropdown", () => {
      // Prüfen, ob noch andere Dropdowns geöffnet sind
      const anyOpenDropdown = Array.from(dropdowns).some((d) =>
        d.classList.contains("show")
      );

      if (!anyOpenDropdown && !header.classList.contains("navbar-scrolled")) {
        updateNavLinkColors("white"); // Zurück zu Weiß, wenn kein Dropdown geöffnet ist
      }
      updateLogo(); // Logo basierend auf dem Zustand aktualisieren
    });
  });
};


  // Mmenu toggle event
  const handleMmenuToggle = () => {
    if (mmenuToggle) {
      mmenuToggle.addEventListener("click", () => {
        header.classList.toggle("mmenu-open");
        updateLogo();
      });
    }
  };

  // Initialize Mmenu for mobile
  const initializeMmenu = () => {
    if (window.innerWidth < 1025) {
      const menu = new Mmenu("#mobile-menu", {
        offCanvas: {
          position: "top",
        },
        theme: "white",
        slidingSubmenus: true,
        extensions: ["position-top", "fx-menu-slide", "fx-panels-slide-100"],
        navbar: {
          title: "Leica Welt",
        },
      });

      const api = menu.API;
      // Optional: Additional API handling can be added here
    }
  };

  // Initialize all functionality
  const initialize = () => {
    if (!header || !header.classList.contains("hero")) return;

    if (window.innerWidth >= 1025) {
      document.addEventListener("scroll", handleScroll);
      handleDropdownEvents();
    } else {
      initializeMmenu();
    }

    handleMmenuToggle();
    updateLogo(); // Initial logo state
  };

  initialize();
});
