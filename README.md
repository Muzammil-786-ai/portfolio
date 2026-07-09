# 🕐 Digital Clock with Multiple Time Zones

A beautiful, responsive digital clock application that displays the current time across 10 different time zones worldwide.

## ✨ Features

- 🌍 **10 Global Time Zones**: Pakistan, India, USA (East & West), UK, Australia, Japan, Dubai, Singapore, and UTC
- 🎨 **Modern Design**: Beautiful gradient background with smooth animations
- 📱 **Fully Responsive**: Works perfectly on desktop, tablet, and mobile devices
- ⚡ **Real-time Updates**: Displays current time updated every second
- 🎯 **Your Local Time**: Shows your device's local time and timezone
- 🌐 **No Dependencies**: Pure HTML, CSS, and JavaScript - no external libraries needed

## 📁 File Structure

```
demo/
├── index.html      # Main HTML file with clock cards
├── style.css       # Styling and animations
├── script.js       # Clock update logic
└── README.md       # Documentation
```

## 🚀 How to Use

1. **Download or Clone** this repository
2. **Open `index.html`** in your web browser
3. Enjoy watching the clocks update in real-time!

## 💻 Browser Compatibility

- Chrome/Chromium ✅
- Firefox ✅
- Safari ✅
- Edge ✅
- Opera ✅

## 📊 Supported Time Zones

| Country/Region | Timezone | UTC Offset |
|---|---|---|
| Pakistan | PKT | UTC +5 |
| India | IST | UTC +5:30 |
| USA - Eastern | EST | UTC -5 |
| USA - Pacific | PST | UTC -8 |
| United Kingdom | GMT | UTC +0 |
| Australia - Sydney | AEDT | UTC +11 |
| Japan | JST | UTC +9 |
| United Arab Emirates | GST | UTC +4 |
| Singapore | SGT | UTC +8 |
| Universal | UTC | UTC +0 |

## 🎨 Customization

### Add More Time Zones

Edit the `timezones` object in `script.js`:

```javascript
const timezones = {
    'your-id': { offset: 5.5, name: 'Your Location' },
    // ... existing timezones
};
```

Then add a new clock card in `index.html`:

```html
<div class="clock-card">
    <div class="timezone-name">
        <span class="flag">🏳️</span>
        <span>Your Location</span>
    </div>
    <div class="digital-time" id="your-id">--:--:--</div>
    <div class="timezone-offset">UTC +X</div>
</div>
```

### Change Colors

Modify the gradient in `style.css`:

```css
background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
```

## 📝 License

Free to use and modify for personal and commercial projects.

## 👨‍💻 Author

Created by **Muzammil-786-ai**

---

**Enjoy your global time zone clock! ⏰**
