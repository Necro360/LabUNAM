(function() {
    var srcDomain = "https://www.xe.com";
    var ifrm = document.createElement("iframe");
    var widgetContainer = document.getElementById("xecurrencywidget");
    var attributes = {
        src:
            srcDomain +
            "/syndication/currencyconverterwidget.php?templang&language=" +
            xeCurrencyWidget.language +
            "&domain=" +
            document.domain +
            "&size=" +
            xeCurrencyWidget.size,
        scrolling: "no",
        seamless: "seamless",
        frameBorder: "0",
        allowTransparency: "true"
    };
    var widgetSizes = {
        compact: { width: 320, height: 300 },
        normal: { width: 560, height: 310 }
    };
    var widgetSize =
        xeCurrencyWidget.size && widgetSizes.hasOwnProperty(xeCurrencyWidget.size) ? xeCurrencyWidget.size : "normal";
    var styles = {
        width: widgetSizes[widgetSize].width + "px",
        height: widgetSizes[widgetSize].height + "px",
        border: "0 none",
        overflow: "hidden"
    };

    for (var attr in attributes) {
        ifrm.setAttribute(attr, attributes[attr]);
    }
    for (var prop in styles) {
        ifrm.style[prop] = styles[prop];
    }
    widgetContainer.appendChild(ifrm);
})();