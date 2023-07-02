document.addEventListener('DOMContentLoaded', function() {
    var navLinks = document.querySelectorAll('.nav-link');

    // Function to set the active tab in local storage
    function setActiveTab(tabId) {
        localStorage.setItem('activeTab', tabId);
    }

    // Function to get the active tab from local storage
    function getActiveTab() {
        return localStorage.getItem('activeTab');
    }

    // Check if there is an active tab in local storage
    var activeTab = getActiveTab();

    // Apply the active class to the appropriate tab
    navLinks.forEach(function(link) {
        var linkUrl = link.getAttribute('href');
        if (linkUrl === activeTab) {
            link.classList.add('active');
        }

        link.addEventListener('click', function(event) {
            event.preventDefault();
            var url = this.getAttribute('href');
            if (url) {
                setActiveTab(url);
                window.location.href = url;
            }
        });
    });
});