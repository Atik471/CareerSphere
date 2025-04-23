function initSidebar() {
  const handleToggle = () => {
    const sidebar = document.getElementById("sidebar");
    const toggleBtn = document.getElementById("toggle-btn");
    const main = document.getElementById("main");
    const sidebarLogo = document.getElementById("sidebar-logo");


    const isCollapsed = sidebar.classList.contains("collapsed");

    if (isCollapsed) {
      sidebar.classList.remove("collapsed");
      sidebar.classList.add("expanded");
      main.style.marginLeft = 250 + "px";
      sidebarLogo.style.display = "block";
    } else {
      sidebar.classList.remove("expanded");
      sidebar.classList.add("collapsed");
      main.style.marginLeft = 75 + "px";
      sidebarLogo.style.display = "none";
    }

    const listItems = document.querySelectorAll("#sidebar li span");
    listItems.forEach((span) => {
      span.classList.toggle("hide-text");
    });
    
  };

  const toggleBtn = document.getElementById("toggle-btn");
  toggleBtn.addEventListener("click", handleToggle);
}

window.initSidebar = initSidebar;
