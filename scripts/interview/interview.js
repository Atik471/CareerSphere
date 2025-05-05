// Handle date selection
document.addEventListener("DOMContentLoaded", () => {
    const dates = document.querySelectorAll(".date");
    const slots = document.querySelectorAll(".slot");
  
    dates.forEach(date => {
      date.addEventListener("click", () => {
        dates.forEach(d => d.classList.remove("selected"));
        date.classList.add("selected");
  
      });
    });
  
    slots.forEach(slot => {
      slot.addEventListener("click", () => {
        slots.forEach(s => {
          s.classList.remove("selected");
          const btn = s.querySelector(".confirm-btn");
          if (btn) btn.remove();
        });
  
        slot.classList.add("selected");
  
        const btn = document.createElement("button");
        btn.textContent = "Confirm";
        btn.classList.add("confirm-btn");
        slot.appendChild(btn);
      });
    });

    const monthYear = document.getElementById("monthYear");
  const calendarGrid = document.getElementById("calendarGrid");
  const prevMonth = document.getElementById("prevMonth");
  const nextMonth = document.getElementById("nextMonth");

  let currentDate = new Date();

  function renderCalendar(date) {
    calendarGrid.innerHTML = "";
    const year = date.getFullYear();
    const month = date.getMonth();

    monthYear.textContent = date.toLocaleString("default", {
      month: "long",
      year: "numeric",
    });

    const firstDay = new Date(year, month, 1).getDay();
    const lastDate = new Date(year, month + 1, 0).getDate();

    for (let i = 0; i < firstDay; i++) {
      const empty = document.createElement("div");
      calendarGrid.appendChild(empty);
    }

    for (let day = 1; day <= lastDate; day++) {
      const dayDiv = document.createElement("div");
      dayDiv.classList.add("calendar-day");
      dayDiv.textContent = day;

      dayDiv.addEventListener("click", () => {
        document
          .querySelectorAll(".calendar-day")
          .forEach(d => d.classList.remove("selected"));
        dayDiv.classList.add("selected");

        console.log(`Selected date: ${year}-${month + 1}-${day}`);
      });

      calendarGrid.appendChild(dayDiv);
    }
  }

  prevMonth.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar(currentDate);
  });

  nextMonth.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar(currentDate);
  });

  renderCalendar(currentDate);
  });
  

  