// Function to format time with leading zeros
function formatTime(date) {
    const hours = String(date.getHours()).padStart(2, '0');
    const minutes = String(date.getMinutes()).padStart(2, '0');
    const seconds = String(date.getSeconds()).padStart(2, '0');
    return `${hours}:${minutes}:${seconds}`;
}

// Function to get time in specific timezone
function getTimeInTimezone(timezone) {
    const now = new Date();
    const utc = now.getTime() + now.getTimezoneOffset() * 60000;
    const newTime = new Date(utc + 3600000 * timezone);
    return formatTime(newTime);
}

// Timezone mappings (offset in hours from UTC)
const timezones = {
    'pkt-time': { offset: 5, name: 'Pakistan' },
    'ist-time': { offset: 5.5, name: 'India' },
    'est-time': { offset: -5, name: 'USA Eastern' },
    'pst-time': { offset: -8, name: 'USA Pacific' },
    'gmt-time': { offset: 0, name: 'London' },
    'aedt-time': { offset: 11, name: 'Sydney' },
    'jst-time': { offset: 9, name: 'Japan' },
    'gst-time': { offset: 4, name: 'Dubai' },
    'sgt-time': { offset: 8, name: 'Singapore' },
    'utc-time': { offset: 0, name: 'UTC' }
};

// Update all clocks
function updateClocks() {
    // Update timezone clocks
    for (const [elementId, { offset }] of Object.entries(timezones)) {
        const timeElement = document.getElementById(elementId);
        if (timeElement) {
            timeElement.textContent = getTimeInTimezone(offset);
        }
    }

    // Update local time
    const now = new Date();
    document.getElementById('local-time').textContent = formatTime(now);
    
    // Get local timezone
    const timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
    document.getElementById('local-tz').textContent = timezone;
}

// Update clocks immediately and then every second
updateClocks();
setInterval(updateClocks, 1000);

// Add smooth animations on page load
window.addEventListener('load', () => {
    const cards = document.querySelectorAll('.clock-card');
    cards.forEach((card, index) => {
        card.style.animation = `slideUp 0.6s ease-out ${index * 0.05}s both`;
    });
});
