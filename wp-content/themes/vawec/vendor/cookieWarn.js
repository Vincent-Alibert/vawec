(function (root, factory) {

	if (typeof define === 'function' && define.amd) {

        // AMD

        define(factory);

    } else if (typeof exports === 'object') {

        // Node, CommonJS-like

        module.exports = factory;

    } else {

        // Browser globals (root is window)

        root.cookieWarn = factory;

    }

}(this, cookieWarn = {



	message: {

		"fr": "En poursuivant votre navigation, vous acceptez l’utilisation de cookies pour vous proposer des services adaptés à vos centres d’intérêts et réaliser des statistiques de visites.",
		"en": "This website uses cookies to offer you the best possible service. By continuing to browse this site, you accept their use."

	},



	linkMessage: {

		"fr": "En savoir plus",
		"en": "Read more"

	},



	flavor: "chocolateCookie",



	styles: {

		container: {

			"width": "100%",

			"margin": "0 auto",

			"position": "fixed",

			"bottom": "0",

			"min-height": "auto",

			"text-align": "center",

			"padding": "10px 15px",

			"background-color": "#1D1D1D",

			"font-family": "Arial, sans-serif",

			"font-size": "13px",

			"line-height": "18px",

			"z-index": "200",

			"color": "white"

		},

		button: {

			"margin-left": "15px",

			"padding": "2px 10px",

			"background-color": "#383838",

			"font-size": "13px",

			"cursor": "pointer",

			"border-radius": "3px",

			"text-transform": "uppercase"

		},

		link: {

			"margin-left": "3px",

			"font-size": "13px",

			"color": "grey"

		}

	},





	createInlineStyles: function(styles){



		var serialized = '';

		for ( var styleName in styles ) {

			if ( !styles.hasOwnProperty(styleName) ) {

				continue;

			}

			var styleValue = styles[styleName];

			if ( styleValue != null ) {

				serialized += styleName + ":" + styleValue + ";";

			}

		}

		return serialized || null;

	},



	getCookieLang: function(){

		return document.querySelector("html").getAttribute("lang");

	},



	haveCookie: function (_flavor) {

		if (document.cookie.indexOf(_flavor) >= 0) {

			return false;

		}

		return true;

	},



	addCookie: function(_flavor, _hunger, _size) {

		if (_size) {

			var date = new Date();

			date.setTime(date.getTime() + (_size * 24 * 60 * 60 * 1000));

			var expires = "; expires=" + date.toGMTString();

		}else{

			var expires = "";

		}

		document.cookie = _flavor + "=" + _hunger + expires + "; path=/";

	},



	showCookies: function () {

			//container

			var cookie = document.createElement("div");

			cookie.textContent = this.message[this.getCookieLang()];

			cookie.id = "cookies";

			cookie.style.cssText = this.createInlineStyles(this.styles.container);

			//lien

			var baseUrl = document.location.origin;

			var cookieLink = document.createElement("a");
			cookieLink.id = 'linkCookie';

			cookieLink.textContent = this.linkMessage[this.getCookieLang()];

			cookieLink.href = baseUrl + '/mentions-legales';

			cookieLink.target = "_blank";

			cookieLink.style.cssText = this.createInlineStyles(this.styles.link);

			//btn

			var cookieBtn = document.createElement("a");

			cookieBtn.id = 'cookieBtn';

			cookieBtn.textContent = 'OK';

			cookieBtn.style.cssText = this.createInlineStyles(this.styles.button);

			cookie.appendChild(cookieLink);

			cookie.appendChild(cookieBtn);

			document.body.appendChild(cookie);

			cookieBtn.onclick = function(){

				this.addCookie(this.flavor, true, 390);

				document.body.removeChild(cookie);

			}.bind(this);

		},



	setCookieStyles: function (obj) {

			if( obj.styles === undefined ){

				return;

			}

			//container

			this.styles.container["background-color"] = obj.styles.bg || this.styles.container["background-color"];

			this.styles.container["font-family"] = obj.styles.fontFamily || this.styles.container["font-family"];

			this.styles.container["color"] = obj.styles.textColor || this.styles.container["color"];

			//button

			this.styles.button["background-color"] = obj.styles.btnBg || this.styles.button["background-color"];

			this.styles.button["color"] = obj.styles.btnTextColor || this.styles.button["color"];

			this.styles.button["border-radius"] = obj.styles.btnBorderRadius || this.styles.container["border-radius"];

			//link

			this.styles.link["color"] = obj.styles.textColor || this.styles.link["color"];

		},



	init: function (obj) {

			this.setCookieStyles(obj);

			var brownie = this.haveCookie(this.flavor);

			if(brownie === true) {

				this.showCookies();

			}

		}

}));



