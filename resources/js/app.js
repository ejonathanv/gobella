import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

/*<![CDATA[*/
(function () {
    var scriptURL =
        "https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js";
    if (window.ShopifyBuy) {
        if (window.ShopifyBuy.UI) {
            ShopifyBuyInit();
        } else {
            loadScript();
        }
    } else {
        loadScript();
    }
    function loadScript() {
        var script = document.createElement("script");
        script.async = true;
        script.src = scriptURL;
        (
            document.getElementsByTagName("head")[0] ||
            document.getElementsByTagName("body")[0]
        ).appendChild(script);
        script.onload = ShopifyBuyInit;
    }
    function ShopifyBuyInit() {
        var client = ShopifyBuy.buildClient({
            domain: "c0dcca-ac.myshopify.com",
            storefrontAccessToken: "b1c0811151952cc4aeb7515164086482",
        });

        // Selecciona todos los nodos con la clase `.buy-button-product`
        var nodes = document.querySelectorAll(".buy-button-product");

        // Itera sobre cada nodo y crea un botón para cada uno
        nodes.forEach(function (node) {
            ShopifyBuy.UI.onReady(client).then(function (ui) {
                ui.createComponent("product", {
                    id: "8330586325182", // Reemplaza con tu ID de producto
                    node: node, // Apunta al nodo actual
                    moneyFormat: "%24%7B%7Bamount%7D%7D",
                    options: {
                        product: {
                            styles: {
                                product: {
                                    "@media (min-width: 601px)": {
                                        "max-width": "calc(25% - 20px)",
                                        "margin-left": "0px",
                                        "margin-bottom": "0px",
                                    },
                                },
                                button: {
                                    "background-color": "#f8d779",
                                    "font-size": "16px",
                                    "font-weight": "bold",
                                    "font-family": "mundial, sans-serif",
                                    "border-bottom": "2px solid #EB6554",
                                    "text-transform": "uppercase",
                                    padding: "15px 28px",
                                    "border-radius": "5px",
                                    color: "#3C3C3C",
                                    ":hover": {
                                        "background-color": "#f8d779",
                                    },
                                    ":focus": {
                                        outline: "none",
                                        "box-shadow": "0 0 5px #f8d779",
                                    },
                                    ":focus-visible": {
                                        "box-shadow": "0 0 5px #f8d779",
                                    },
                                    ":active": {
                                        "background-color": "#f8d779",
                                    },
                                    ":disabled": {
                                        "background-color": "#f8d779",
                                        cursor: "not-allowed",
                                    },
                                    ":hover:disabled": {
                                        "background-color": "#f8d779",
                                    },
                                    ":not(:disabled)": {
                                        "background-color": "#f8d779",
                                    },
                                    ":hover:active": {
                                        "background-color": "#f8d779",
                                    },
                                    ":visited": {
                                        "background-color": "#f8d779",
                                    },
                                    ":checked": {
                                        "background-color": "#f8d779",
                                    },
                                    ":before": {
                                        "background-color": "#f8d779",
                                    },
                                    ":after": {
                                        "background-color": "#f8d779",
                                    },
                                },
                            },
                            contents: {
                                img: false,
                                title: false,
                                price: false,
                            },
                            text: {
                                button: "Buy Now for $39.99",
                            },
                        },
                        cart: {
                            text: {
                                total: "Subtotal",
                                button: "Checkout",
                            },
                            popup: false,
                        },
                    },
                });
            });
        });
    }
})();
/*]]>*/
