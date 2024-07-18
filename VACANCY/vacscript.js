document.addEventListener("DOMContentLoaded", function() {
    // Sample data - replace this with actual data fetched from a server
    var vacancies = [
        { title: "Civil Engineer", Experience: "Above 5 Years", Skills: "Atleast 20 projects should have been done" },
        { title: "Architecture", Experience: "Above 3 Years", Skills: "Atleast 15 projects should have been done" },
        { title: "Administrator", Experience: "Above 4 Years", Skills: "System Management & IT knowledge" },
        { title: "Project Manager", Experience: "Above 5 Years", Skills: "Atleast 20 projects should have been done" },
        { title: "Financial Manager", Experience: "Above 3 Years", Skills: "handling the Popular financial softwares" },
        { title: "Supervisor", Experience: "Above 2 Years", Skills: "Communication Skills & Time management" },
        { title: "Employee", Experience: "Above 1 Years", Skills: "Time management & Team work" }
        
    ];

    var vacancyList = document.getElementById("vacancy-list");

    // Function to create vacancy item with delay
    function createVacancyWithDelay(vacancy, index) {
        setTimeout(function() {
            var vacancyItem = document.createElement("li");
            vacancyItem.classList.add("vacancy");
            vacancyItem.innerHTML = `
                <h2>${vacancy.title}</h2>
                <p><strong>Experience:</strong> ${vacancy.Experience}</p>
                <p><strong>Skills:</strong> ${vacancy.Skills}</p>
            `;
            vacancyList.appendChild(vacancyItem);
        }, index * 500); // Delay each item by 500ms (0.5s)
    }

    // Populate the vacancy list with delay for each item
    vacancies.forEach(function(vacancy, index) {
        createVacancyWithDelay(vacancy, index);
    });
});
