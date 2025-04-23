function initSidebar() {
  const sidebar = document.getElementById("sidebar");
  const main = document.getElementById("main");
  const sidebarLogo = document.getElementById("sidebar-logo");
  const toggleBtn = document.getElementById("toggle-btn");
  const sidebarTooltips = document.querySelectorAll("#sidebar .sidebar-tooltip");

  const applySidebarState = (isCollapsed) => {
    if (isCollapsed) {
      sidebar.classList.add("collapsed");
      sidebar.classList.remove("expanded");
      main.style.marginLeft = "75px";
      sidebarLogo.style.display = "none";
      sidebarTooltips.forEach((tooltip) => {
        tooltip.style.display = "block";
      });
    } else {
      sidebar.classList.add("expanded");
      sidebar.classList.remove("collapsed");
      main.style.marginLeft = "250px";
      sidebarLogo.style.display = "block";
      sidebarTooltips.forEach((tooltip) => {
        tooltip.style.display = "none";
      });
    }

    const listItems = document.querySelectorAll("#sidebar li span");
    listItems.forEach((span) => {
      span.classList.toggle("hide-text", isCollapsed);
    });
  };

  const storedState = localStorage.getItem("sidebarCollapsed");
  const isCollapsed = storedState === "true";
  applySidebarState(isCollapsed);

  toggleBtn.addEventListener("click", () => {
    const currentlyCollapsed = sidebar.classList.contains("collapsed");
    const newState = !currentlyCollapsed;
    applySidebarState(newState);
    localStorage.setItem("sidebarCollapsed", newState.toString());
  });
}

window.initSidebar = initSidebar;
