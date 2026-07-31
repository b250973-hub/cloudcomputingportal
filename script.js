
var topicsData = [
    { title: "What is Cloud Computing", desc: "Definition and meaning of cloud computing.", link: "about.php" },
    { title: "History of Cloud Computing", desc: "How cloud computing evolved over time.", link: "about.php" },
    { title: "Characteristics of Cloud Computing", desc: "On-demand, scalability, pay-per-use and more.", link: "about.php" },
    { title: "Advantages of Cloud Computing", desc: "Cost saving, flexibility, backup and more.", link: "about.php" },
    { title: "Disadvantages of Cloud Computing", desc: "Internet dependency, security risk and more.", link: "about.php" },

    { title: "IaaS - Infrastructure as a Service", desc: "Provides virtual servers, storage and networking.", link: "services.php" },
    { title: "PaaS - Platform as a Service", desc: "Provides a platform to build and run applications.", link: "services.php" },
    { title: "SaaS - Software as a Service", desc: "Provides ready to use software over the internet.", link: "services.php" },

    { title: "Public Cloud", desc: "Cloud services offered over the public internet.", link: "deployment.php" },
    { title: "Private Cloud", desc: "Cloud used exclusively by a single organization.", link: "deployment.php" },
    { title: "Hybrid Cloud", desc: "Combination of public and private cloud.", link: "deployment.php" },
    { title: "Community Cloud", desc: "Cloud shared between organizations with common goals.", link: "deployment.php" },

    { title: "Amazon Web Services (AWS)", desc: "Leading cloud provider by Amazon.", link: "providers.php" },
    { title: "Microsoft Azure", desc: "Cloud platform by Microsoft.", link: "providers.php" },
    { title: "Google Cloud Platform (GCP)", desc: "Cloud platform by Google.", link: "providers.php" },
    { title: "IBM Cloud", desc: "Cloud platform by IBM focused on AI and hybrid cloud.", link: "providers.php" },
    { title: "Oracle Cloud", desc: "Cloud platform by Oracle focused on databases.", link: "providers.php" },

    { title: "Cloud Authentication", desc: "Verifying user identity before granting access.", link: "security.php" },
    { title: "Cloud Encryption", desc: "Converting data into unreadable form for safety.", link: "security.php" },
    { title: "Cloud Backup", desc: "Keeping copies of data to prevent loss.", link: "security.php" },
    { title: "Disaster Recovery", desc: "Plan to recover data and systems after a disaster.", link: "security.php" },
    { title: "Data Privacy", desc: "Protecting personal and sensitive data in the cloud.", link: "security.php" },

    { title: "Cloud in Education", desc: "Online classes, e-learning platforms and study material.", link: "applications.php" },
    { title: "Cloud in Banking", desc: "Online banking, secure transactions and data storage.", link: "applications.php" },
    { title: "Cloud in Healthcare", desc: "Storing patient records and telemedicine.", link: "applications.php" },
    { title: "Cloud in E-Commerce", desc: "Online shopping websites hosted on cloud.", link: "applications.php" },
    { title: "Cloud in Government", desc: "Digital governance and citizen services.", link: "applications.php" },
    { title: "Cloud in Entertainment", desc: "Streaming movies, music and games online.", link: "applications.php" }
];


document.addEventListener("DOMContentLoaded", function () {

    
    var allCards = document.querySelectorAll(".card");
    allCards.forEach(function (card) {
        card.classList.add("fade-in");
    });

    
    var currentPage = window.location.pathname.split("/").pop();
    var navLinks = document.querySelectorAll(".nav-link");
    navLinks.forEach(function (link) {
        if (link.getAttribute("href") === currentPage) {
            link.classList.add("fw-bold", "text-primary");
        }
    });

    
    var searchBox = document.getElementById("searchBox");
    if (searchBox) {
        searchBox.addEventListener("keyup", performSearch);
    }
});


function performSearch() {
    var query = document.getElementById("searchBox").value.toLowerCase().trim();
    var resultDiv = document.getElementById("searchResults");
    resultDiv.innerHTML = ""; 
    if (query === "") {
        resultDiv.innerHTML = "<p class='text-muted text-center'>Start typing to search cloud computing topics...</p>";
        return;
    }

    var matchCount = 0;

    for (var i = 0; i < topicsData.length; i++) {
        var topic = topicsData[i];
        var titleMatch = topic.title.toLowerCase().indexOf(query) !== -1;
        var descMatch = topic.desc.toLowerCase().indexOf(query) !== -1;

        if (titleMatch || descMatch) {
            matchCount++;
            resultDiv.innerHTML += `
                <div class="card search-result-card mb-3 p-3">
                    <h5 class="text-primary">${topic.title}</h5>
                    <p class="mb-2">${topic.desc}</p>
                    <a href="${topic.link}" class="btn btn-sm btn-outline-primary">Read More</a>
                </div>
            `;
        }
    }

    if (matchCount === 0) {
        resultDiv.innerHTML = "<p class='text-danger text-center'>No topics found. Try another keyword.</p>";
    }
}
