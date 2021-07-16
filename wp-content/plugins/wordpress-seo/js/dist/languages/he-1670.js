window.yoast=window.yoast||{},window.yoast.Researcher=function(e){var t={};function r(n){if(t[n])return t[n].exports;var o=t[n]={i:n,l:!1,exports:{}};return e[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}return r.m=e,r.c=t,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)r.d(n,o,function(t){return e[t]}.bind(null,o));return n},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=41)}([function(e,t){e.exports=window.yoast.analysis},function(e,t){function r(t){return e.exports=r=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)},e.exports.default=e.exports,e.exports.__esModule=!0,r(t)}e.exports=r,e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){e.exports=window.lodash},function(e,t){e.exports=function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t,r){var n=r(7);e.exports=function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&n(e,t)},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t,r){var n=r(6).default,o=r(8);e.exports=function(e,t){return!t||"object"!==n(t)&&"function"!=typeof t?o(e):t},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){function r(t){return"function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?(e.exports=r=function(e){return typeof e},e.exports.default=e.exports,e.exports.__esModule=!0):(e.exports=r=function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e.exports.default=e.exports,e.exports.__esModule=!0),r(t)}e.exports=r,e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){function r(t,n){return e.exports=r=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e},e.exports.default=e.exports,e.exports.__esModule=!0,r(t,n)}e.exports=r,e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){e.exports=function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e},e.exports.default=e.exports,e.exports.__esModule=!0},,,function(e,t,r){var n=r(14),o=r(15),u=r(13),i=r(16);e.exports=function(e){return n(e)||o(e)||u(e)||i()},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){e.exports=function(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t,r){var n=r(12);e.exports=function(e,t){if(e){if("string"==typeof e)return n(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?n(e,t):void 0}},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t,r){var n=r(12);e.exports=function(e){if(Array.isArray(e))return n(e)},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){e.exports=function(e){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e))return Array.from(e)},e.exports.default=e.exports,e.exports.__esModule=!0},function(e,t){e.exports=function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")},e.exports.default=e.exports,e.exports.__esModule=!0},,,,,,,,,,,,,,,,,,,,,,,,,function(e,t,r){"use strict";r.r(t),r.d(t,"default",(function(){return I}));var n=r(3),o=r.n(n),u=r(4),i=r.n(u),f=r(5),s=r.n(f),a=r(1),c=r.n(a),p=r(0),l=[].concat(["אחת","אחד","שתים","שנים","שתיים","שלש","שלשה","ארבע","ארבעה","חמש","חמשה","שש","ששה","שבע","שבעה","שמונה","שמונה","תשע","תשעה","עשר","עשרה","עשרים","מאה","אלף","מיליון","מילירד"],["ראשון","ראשונה","שני","שניה","שלישי","שלישית","רביעי","רביעית","חמישי","חמישית","ששי","ששית","שביעי","שביעית","שמיני","שמינית","תשיעי","תשיעית","עשירי","עשירית"],["אני‎","אנחנו‎","אנו‎","אתה‎","את‎","אתם‎","אתן‎","הוא‎","היא‎","הם‎","הן‎","שאני","שאתה","שהוא","ואני","שהיא"],["זה","זאת","זו","ההוא","ההיא","איזה","איזו","אלה","אלו","ההם","ההן","אילו","לזה","הזה","שזה"],["מה","מי","למה","כמה","האם","איפה","איזה","איזו","אילו","מתי","כאשר","איך","אי","אלמלא"],["כולם","כול","רוב","חלק","פחות","מעט","הרבה","רב","רבה","רבים","רבות","לפחות"],["עצמי","לעצמי","בעצמי","עצמך","לעצמך","בעצמך","עצמך","לעצמך","בעצמך","עצמו","עצמה","עצמנו","עצמכם","עצמכן","עצמם","עצמן"],["משהו","מישהו","מישהי","כלום"],["את","אותי","אותנו","אותך","אתכם","אתכן","אותו","אותה","אותם","אותן","שאת","של","שלי","שלנו","שלך","שלכם","שלכן","שלו","שלהם","שלהן","לי","לך","לו","לה","לנו","לכם","לכן","להם","להן","על","עליי","עלינו","עליך","עלייך","עליכם","עליכן","עליו","עליה","עליהם","עליהן","גבי","גבנו","גבך","גבה","גבנו","גבכם","גבכן","גבם","גבן","אל","אליי","אלינו","אליך","אלייך","אליכם","אליכן","אליו","אליה","אליהם","אליהן","ואל","עם","איתי","עימי","איתנו","עימנו","איתך","עימך","איתכם","איתכן","איתו","איתה","איתם","עימם","כמו","כמוני","כמונו","כמוך","כמוך","כמוכם","כמוכן","כמוהו","כמוה","כמוהם","כמוהן","כמוכם","כמוכן","לפני","לפניי","לפנינו","לפניך","לפנייך","לפניו","לפניה","לפניכם","לפניכן","לפניהם","לפניהן","ובכן","בן","בי","בנו","בך","בכם","בכן","בו","בה","בהם","בהן","בגלל","בגללי","בגללנו","בגללך","בגללכם","בגללכן","בגללו","בגללה","בגללם","בגללן","אחר","אחריי","אחרינו","אחריך","אחרייך","אחריכם","אחריכן","אחריו","אחריה","אחריהם","אחריהן","בשביל","בשבילי","בשבילנו","בשבילך","בשבילו","בשבילה","בשבילכם","בשבילכן","בשבילם","בשבילן","במקום","במקומי","במקומנו","במקומך","במקומו","במקומה","במקומכם","במקומכן","במקומם","במקומן","עד","אודות","אודותי","אודותנו","אודותך","אודותכם","אודותכן","אודותו","אודותה","אודותם","אודותן","מאחורי","מאחוריי","מאחורינו","מאחוריך","מאחורייך","מאחוריכם","מאחוריכן","מאחוריו","מאחוריה","מאחוריהם","מאחוריהן","אצל","אצלי","אצלנו","אצלך","אצלך","אצלכם","אצלכן","אצלו","אצלה","אצלם","אצלן","באמצעות","באמצעותי","באמצעותנו","באמצעותך","באמצעותכם","באמצעותכן","באמצעותו","באמצעותה","באמצעותם","באמצעותן","בזכות","בזכותי","בזכותנו","בזכותך","בזכותכם","בזכותכן","בזכותו","בזכותה","בזכותם","בזכותן","ביני","בינינו","בינך","ביניכם","ביניכן","בינו","בינה","ביניהם","ביניהן","בלעדיי","בלעדינו","בלעדיך","בלעדייך","בלעדיכם","בלעדיכן","בלעדיו","בלעדיה","בלעדיהם","בלעדיהן","בעד","בעדי","בעדנו","בעדך","בעדך","בעדכם","בעדכן","בעדו","בעדה","בעדם","בעדן","בעקבות","בעקבי","בעקביי","בעקבינו","בעקביך","בעקבייך","בעקביכם","בעקביכן","בעקביו","בעקביה","בעקביהם","בעקביהן","בפני","בפניי","בפנינו","בפניך","בפנייך","בפניכם","בפניכן","בפניו","בפניה","בפניהם","בפניהן","בקרב","בקרבי","בקרבנו","בקרבך","בקרבך","בקרבכם","בקרבכן","בקרבו","בקרבה","בקרבם","בקרבן","בשם","בשמי","בשמנו","בשמך","בשמך","בשמכם","בשמכן","בשמו","בשמה","בשמם","בשמן","בתוך","בתוכי","בתוכנו","בתוכך","בתוכך","בתוככם","בתוככן","בתוכו","בתוכה","בתוכם","בתוכן","כמוני","כמונו","כמוך","כמוך","כמוכם","כמוכן","כמוהו","כמוה","כמוהם","כמוהן","כלפי","כלפיי","כלפינו","כלפיך","כלפייך","כלפיכם","כלפיכן","כלפיו","כלפיה","כלפיהם","כלפיהן","כנגד","כנגדי","כנגדנו","כנגדך","כנגדך","כנגדכם","כנגדכן","כנגדו","כנגדה","כנגדם","כנגדן","לאורך","לאורכי","לאורכנו","לאורכך","לאורכך","לאורככם","לאורככן","לאורכו","לאורכה","לאורכם","לאורכן","לגבי","לגביי","לגבינו","לגביך","לגבייך","לגביכם","לגביכן","לגביו","לגביה","לגביהם","לגביהן","לדברי","לדבריי","לדברינו","לדבריך","לדברייך","לדבריכם","לדבריכן","לדבריו","לדבריה","לדבריהם","לדבריהן","ליד","לידי","לידנו","לידך","לידך","לידכם","לידכן","לידו","לידה","לידם","לידן","למען","למעני","למעננו","למענך","למענך","למענכם","למענכן","למענו","למענה","למענם","למענן","לפי","לפי","לפינו","לפיך","לפיך","לפיכם","לפיכן","לפיו","לפיהו","לפיה","לפיהם","לפיהן","לקראת","לקראתי","לקראתנו","לקראתך","לקראתך","לקראתכם","לקראתכן","לקראתו","לקראתה","לקראתם","לקראתן","לרוחב","לרוחבי","לרוחבנו","לרוחבך","לרוחבך","לרוחבכם","לרוחבכן","לרוחבו","לרוחבה","לרוחבם","לרוחבן","מול","מולי","מולנו","מולך","מולך","מולכם","מולכן","מולו","מולה","מולם","מולן","מן","ממני","ממנו","מאיתנו","ממך","ממך","מכם","מכן","ממנו","ממנה","מהם","מהן","מעל","מעליי","מעלינו","מעליך","מעלייך","מעליכם","מעליכן","מעליו","מעליה","מעליהם","מעליהן","מפני","מפניי","מפנינו","מפניך","מפנייך","מפניכם","מפניכן","מפניו","מפניה","מפניהם","מפניהן","מתחת","מתחתיי","מתחתינו","מתחתיך","מתחתייך","מתחתיכם","מתחתיכן","מתחתיו","מתחתיה","מתחתיהם","מתחתם","מתחתיהן","מתחתן","עבור","עבורי","עבורנו","עבורך","עבורכם","עבורכן","עבורו","עבורה","עבורם","עבורן","תחת","תחתיי","תחתינו","תחתיך","תחתייך","תחתיכם","תחתיכן","תחתיו","תחתיה","תחתיהם","תחתם","תחתיהן","תחתן","לעומת","לעומתי","לעומתנו","לעומתך","לעומתך","לעומתכם","לעומתכן","לעומתו","לעומתה","לעומתם","לעומתן","פי"],["אבל","אך","אלא","אם","אז","או","כדי","כי","אכן","אגב","אולם","אע״פ","אשר","בעוד","ו/או","יען","לולא","פן"],["אומר","אומרת","אומרים","אומרות","אמרתי","אמרנו","אמרת","אמרתם","אמרתן","אמר","אמרה","אמרו","נאמר","תאמר","תאמרי","תאמרו","תאמרנה","יאמר","תאמר","תאמרנה","יאמר","יאמרו","אמור","אמרי","אמורנה","מדבר","מדברת","מדברים","מדברות","דיברתי","דיברנו","דיברת","דיברתם","דיברתן","דיבר","דיברה","דיברו","אדבר","נדבר","תדבר","תדברי","תדברו","תדברנה","ידבר","ידברו","דבר‏","דברי‏","דברו‏","דברנה‏","לדבר","מבין","מבינה","מבינים","מבינות","הבנתי","הבינותי","הבנו","הבינונו","הבנת","הבינות","הבנתם","הבינותם","הבנתן","הבינותן","הבין","הבינה","הבינו","אבין","נבין","תבין","תביני","תבינו","תבנה","יבין","יבינו","תבינינה","הבן‏","הביני‏","הבנה‏","להבין","מאמין","מאמינה","מאמינים","מאמינות","האמנתי","האמנו","האמנת","האמנתם","האמנתן","האמין","האמינה","האמינו","אאמין","נאמין","תאמין","תאמיני","תאמינו","תאמנה","יאמין","יאמינו","האמן‏","האמיני‏","האמינו‏","האה‏","להאמין","יודע","יודעת","יודעים","יודעות","ידעתי","ידענו","ידעת","ידעתם","ידעתן","ידע","ידעה","ידעו","אדע","נדע","תדע","תדעי","תדעו","תדענה","דע‏","דעי‏","דעו‏","דענה‏","לדעת","שואל","שואלת","שואלים","שואלות","שאלתי","שאלנו","שאלת","שאלתם","שאלתן","שאל","שאלה","שאלו","אשאל","נשאל","תשאל","תשאלי","תשאלו","תשאלנה","ישאל","ישאלו","שאל‏","שאלי‏","שאלו‏","שאלנה‏","לשאול"],["מאוד","בהחלט","ביותר","נורא","לגמרי","די"],["להיות","היי","הייתי","יהיה","היית","הייתה","היינו","הייתם","הייתן","היו","אהיה","תהיה","תהיי","יהיה","נהיה","תהיו","תהיינה","יהיו","היינה","יש","שיש","הנה","אין","רוצה","רוצים","רציתי","רצה","יכול","יכולה","יכולים","נוכל","צריך","צריכה","חייב","לעשות","עושה","חושב","חשבתי","חושבת","נראה","לראות","רואה","בוא","הולך","ללכת","הולכת","הלכתי","הלכת","הלכת","הלך","הלכה","אלך","תלך","תלכי","ילך","לכי","הולכים","הולכות","הלכנו","הלכתם","הלכתן","הלכו","נלך","תלכו","תלכנה","ילכו","לכו","לכנה","מצטער","קרה","קורה","אוהב","שום","להשתמש","לנסות","מנסה","לוקח","אקח","לשים","נותן","נותנת","נותנים","נותנות","נת","תינתנו","נתת","נתתם","נתתן","נתן","נתנה","נתנו","אתן","ניתן","תיתן","תיתני","תיתנותיתנה","ייתןנתתתיתן","ייתנו","תיתנה","תן‏","תני‏","תנו‏","תנה‏","לתת"],["רק","כל","יותר","כאן","כך","כה","נכון","עכשיו","עכשיו","שם","קדימה","אף","עוד","באמת","ממש","אולי","כבר","פה","קצת","עדיין","בדיוק","שוב","תמיד","אפילו","בטח","מאוחר","לאחרונה","בקרוב","מיד","בחוץ","מהר","קשה","לאט","לרוב","כמעט","בדרך","כלל","לפעמים","יחד","לבד","אחורה","כאילו","גם","בערך","הכי","מלא","מלאה","מלאים","מלאות","טוב","טובה","טובים","טובות","חדש","חדשה","חדשים","חדשות","ישן","ישנה","ישנים","ישנות","צעיn","צעירה","צעירים","צעירות","גדול","גדולה","גדולים","גדולות","קל","קלה","קלים","קלות","מהיר","מהירה","מהירים","מהירות","רחוק","רחוקה","רחוקים","רחוקות","נחמד","נחמדה","נחמדים","נחמדות","מיוחד","מיוחדת","מיוחדים","מיוחדות","פשוט","פשוטה","פשוטים","פשוטות","קטן","קטנה","קטנים","קטנות","ארוך","ארוכה","ארוכים","ארוכות","קצר","קצרה","קצרים","קצרות","נמוך","נמוכה","נמוכים","נמוכות","שלם","שלמה","שלמים","שלמות","גבוה","גבוהה","גבוהים","גבוהות","חשוב","חשובה","חשובים","חשובות"],["ח","הו","וואו"],['ק"ג',"ג'","גרם",'סמ"ק','מ"ל',"ליטר","כף","כפית","כוס","כוסות"],["היום","אתמול","מחר","יום","ימים","שבוע","בשבוע","שבועות","שעה","שעות","דקה","דקות","רגע","רגעים","חודש","חודשים","שנה","שנים","השנה"],["דבר","פעם","פעמים","זמן","הזמן","הכל","בכל","אנשים","מקום","לעתים","מספר","אחוז","אחוזים"],["כן","לא","שלא","בסדר","תודה","בבקשה","שלום","אחוז","מר","אדוני","גברת","אדם"]),x=["לכן","משום‎","בגלל","מפני","אחרי","לפני","חוץ","בזכות","כתוצאה","הודות","בשביל","למרות‎","בשל‎","ו","או","אבל","אולם","אך","אם","גם","רק","אכן","אלא","עדיין","כאשר","אז","לכן","כבר","לאחר","אפילו","אף","כך","כדי","על","עד","בשנת","כמו","שני","באופן","במהלך","במקום","וכן","בעיקר","מאז"," בינתיים","במקום","תחת","מתוך","מול","כגון","באמצעות","מכן","במשך","ואף","ועל","לעתים","בנוסף","בעקבות","לפי","בקרב","כי","ראשית","שנית","תחילה","לבסוף","הבא","ברם","ואילו","להפך","כנגד","מנגד","אמנם","אדרבא","לחילופין","בייחוד","במיוחד","ודאי","ואפילו","לו","אילו","לולא","אלמלא","אילולא","מאחורי","בקרבת","כאן","שם","כן","למעט","בלבד","מלבד","שוב","כלומר","דהיינו","לאמור","כאמור","כידוע","כש","אחר-כך","כעבור","לאחרונה","בטרם","עכשיו","עתה","מלכתחילה","למען","פן","לבל","שמא","עקב","לרגל","מפאת","בגין","בהתאם","לפיכך","למשל","לדוגמה","כדוגמת","לסיכום","בהתחשב","בקיצור","בקצרה","חרף"].concat(["כתוצאה מכך","כתוצאה מ","בעקבות ה","בעקבות זאת","לעומת זאת","אלא אם כן","בזמן ש","מתי ש","אף על פי ש","אף על פי","חוץ מ","אחרי ש","לפני ש","בעוד ש","בגלל ה","הודות ל","בניגוד ל","מפני ש","אלא ש","קודם כל","והחשוב ביותר","לפני כן","לאחר מכן","אחר כך","שלב ראשון","בניגוד לכך","ראוי לציין","יש להדגיש","ללא ספק","קל וחומר","אין ספק ש","לא כל שכן","בתנאי ש","בדומה ל","כשם ש","כפי ש","כך גם","יחסית ל","בהשוואה ל","לשם כך","במקביל ל","במידה ש","במקום ש","על יד","בסמוך ל","במרחק מה","אל אשר","מעבר ל","כמו כן","יתר על כן","זאת ועוד","נוסף על כך","פרט ל","למעלה מכך","פנים נוספות לעניין","יתרה מכך","אך ורק","מעבר לכך","זאת אומרת","במילים אחרות","רוצה לומר","הווה אומר","משתמע מזאת","הוא אשר","ללמד ש","פירושו של דבר","לשון אחרת","בהקשר זה","דרך אגב","כדי ש","כנזכר לעיל","בקשר לכך","במסגרת זו","עד ש","בשעה ש","כל זמן ש","לפי שעה","בזמן האחרון","עד כה","בו בזמן","כל אימת ש","על מנת","לתכלית זו","במטרה ל","מחמת ה","הואיל ו","מאחר ש","היות ש","כיוון ש","יען כי","באופן ש","בצורה ש","כמו ש","אם כן","אפוא","על כן","משום כך","עקב כך","בשל כך","אי לכך","נובע מכך","הודות לכך","כמו למשל","סיכומו של דבר","מכל האמור ניתן לומר","בסך הכול","בכל מקרה","בסיכום כולל","לטווח ארוך","על כל פנים","אף על פי כן","על אף ש","על אף זאת","אף ש","למרות זאת","בכל אופן","עם זאת","אם כי","גם אם"]),d=[["או","או"],["אין","אלא"],["לא","אלא"],["מצד אחד","מצד אחר"],["מחד גיסא","מאידך גיסא"],["ראשית","שנית"],["תחילה","לבסוף"],["משום ש","מפני ש"],["לכאורה","אך"]],y=["אחד","כמה","מעטים","אחת","שנים","שתים","שלשה","שלש","ארבעה","ארבע","חמשה","חמש","ששה","שש","שבעה","שבע","שמונה","שמונה","תשעה","תשע","עשרה","עשר","זה","זאת","אלה","אוה","היא","אלה","המה","הם","הנה"],v={recommendedWordCount:15,slightlyTooMany:25,farTooMany:30},b=r(11),m=r.n(b);function g(e){var t=["ב","ה","ו","כ","ל","מ","ש"],r=[];r.push.apply(r,m()(t.map((function(t){return t+e}))));var n="";return t.some((function(t){return e.startsWith(t)}))&&(n=e.slice(1)),n.length>0&&(r.push(n),r.push.apply(r,m()(t.map((function(e){return e+n}))))),r}var h=r(2),_=function(e,t){return t.some((function(t){return e.startsWith(t)}))?e.slice(1):e},w=p.languageProcessing.baseStemmer;function S(e){var t=Object(h.get)(e.getData("morphology"),"he",!1);return t?function(e){return function(e,t){var r=t.dictionary,n=r[e];if(n)return n;var o=_(e,t.prefixes);if(o!==e){if(n=r[o])return n;var u=_(o,t.prefixes);if(u!==o&&(n=r[u]))return n}return e}(e,t)}:w}var M=r(6),O=r.n(M),j=["אכל","דבר","עבר","עמד","קרא","שמע","זכר","חזק","חטא","כתב","מלך","מצא","נגד","נפל","עבר","פקד","רום","שכב","אבד","אמן","גדל","חשב","יטב","כבד","לבש","קדש","קרב","שנא","שאל","שאר","שבע","שחת","שכן","שכח","שלך","שלם","בער","בקע","ברא","ברח","דבק","דרך","זעק","חלק","חרם","חרש","כעס","כשל","מאס","משל","נבט","נחל","נצח","סגר","סתר","ערך","פרה","פלא","פלל","פעל","פרד","פרש","צלח","צרר","קלל","קנה","רחק","רכב","רעע","שבע","שכל","שכם","אשם","בדל","בהל","בחן","בשל","גבה","גנב","זרק","חלם","חלף","חרב","חרד","חרף","חשך","חתם","טמן","טרף","כלם","כנע","כרע","משך","נהג","סמך","פחד","פרד","פרח","פשט","צדק","צמח","צפן","קדם","קצף","קשב","רבץ","רגז","רגל","רחב","רעש","רשע","שפל","שקט","ברר","גבר","געל","טעם","כזב","כחש","כנס","לחץ","מטר","מעט","מרד","משל","נגש","נזל","עלם","עצב","עשר","פגש","פרע","צבא","צמת","קסם","רבע","רגע","רעב","רעם","רקע","שאב","שבח","שחר","שכל","שכר","שען","שקף","שתל","שלכ‎","מלכ‎","דרכ‎","ערכ‎","חשכ‎","משכ‎","סמכ‎","אמנ","שכנ","בחנ","טמנ","צפנ","שענ","רומ","שלמ","חרמ","שכמ","אשמ","חלמ","חתמ","כלמ","קדמ","עלמ","טעמ","חלפ","חרפ","טרפ","קצפ","שקפ","רבצ","לחצ"],P=["אכל","אמר","לקח","נשא","נתן","קרא","שלח","שמע","אהב","אסף","כרת","כתב","מצא","פקד","שמר","שפט","אבד","אמן","גאל","דרש","הרג","חשב","טמא","יתר","לכד","ספר","עזב","קבץ","קבר","רדף","שרף","שאל","שבר","שחת","שכח","שלם","שפך","אסר","בחר","בלע","בקע","ברא","דרך","זרע","חלק","חנן","חרש","טהר","למד","מכר","משל","סגר","סתר","עזר","ערך","פרד","פרש","צפה","קנה","קרע","רחץ","רפא","שבע","שחט","שמר","תפש","תקע","אשם","בגד","בדל","בחן","גזל","גמל","גנב","הרס","זרק","חבא","חבש","חלץ","חצב","חקר","חרב","חתם","טמן","טרף","לקט","מנע","סלח","סמך","ספר","עצר","פגע","פלט","פרד","פרץ","פשט","צפן","קצר","קשר","רעש","רצח","שחק","שטף","אטם","אלם","ארג","בצע","גאל","גדר","גזז","גזר","גלח","גרע","דחה","דקר","חבל","חרש","חכה","חפר","חקק","חרץ","חשק","טבח","טבל","טבע","כבש","כלא","לחץ","מחץ","מסס","משל","נשא","סחר","סלל","סער","סקל","סתם","עטף","עכר","פרע","פרק","רמס","שאב","שאף","שבר","שכר","שלל","שלף","שקל","שקף","שתל","תכן","תמך","תעב","שפכ‎","דרכ‎","ערכ‎","סמכ‎","תמכ‎","נתנ","אמנ","חננ","בחנ","טמנ","צפנ","תכנ","שלמ","אשמ","חתמ","אטמ","אלמ","סתמ","אספ","רדפ","שרפ","טרפ","שטפ","עטפ","שאפ","שלפ","שקפ","קבצ","רחצ","חלצ","פרצ","חרצ","לחצ","מחצ"],A=["אכל","דבר","עבר","שלח","בקש","ברך","חזק","חטא","כתב","נצל","עבר","פקד","רום","שמר","אבד","אמן","בטח","גדל","הלל","חלל","חשב","טמא","יתר","כבד","כסה","כפר","לחם","לכד","נבא","נגע","סבב","ספר","קבץ","קדש","קרב","שמח","שבר","שכן","שלם","שרת","בער","בקע","ברא","חלק","חנן","טהר","כבס","למד","מרר","מהר","מלט","נכר","נצח","פלל","פרש","צפה","קלל","רחם","רחק","רנן","רפא","שמר","בדל","בצר","בשל","גרש","דמם","זמר","חבר","מאן","נשק","נתץ","נתק","ספר","ערב","פשט","צרף","קדם","קנא","קצר","קשר","רגל","שחק","בצע","ברר","בשר","גדר","גלל","דכא","דשן","חבל","חבק","חמם","חפש","חשק","כהן","כזב","כנס","מסס","מעט","מרר","נגן","נדב","נהל","נחש","נער","נפח","נפץ","נשך","סכך","סכן","סקל","עלל","ענג","עצב","פאר","פזר","פצה","פקח","פרק","פתה","קבל","קדד","קצץ","רמה","רצץ","רקע","שבח","שבר","שנה","שקר","שקף","תכן","תעב","ברכ‎","נשכ‎","סככ‎","אמנ","שכנ","חננ","רננ","מאנ","דשנ","כהנ","נגנ","סכנ","תכנ","רומ","לחמ","שלמ","רחמ","דממ","קדמ","חממ","צרפ","שקפ","קבצ","נתצ","קצצ","רצצ","נפצ"];function R(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}var T=p.languageProcessing.getWords,W=function(e,t,r){return t.some((function(t){return r.some((function(r){return new RegExp("^"+r.prefix+t+r.suffix+"$").test(e)}))}))};function E(e){var t,r=function(e,t){var r;if("undefined"==typeof Symbol||null==e[Symbol.iterator]){if(Array.isArray(e)||(r=function(e,t){if(e){if("string"==typeof e)return R(e,void 0);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?R(e,void 0):void 0}}(e))||t&&e&&"number"==typeof e.length){r&&(e=r);var n=0,o=function(){};return{s:o,n:function(){return n>=e.length?{done:!0}:{done:!1,value:e[n++]}},e:function(e){throw e},f:o}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var u,i=!0,f=!1;return{s:function(){r=e[Symbol.iterator]()},n:function(){var e=r.next();return i=e.done,e},e:function(e){f=!0,u=e},f:function(){try{i||null==r.return||r.return()}finally{if(f)throw u}}}}(T(e));try{var n=function(){var e=t.value;if(W(e,P,[{prefix:"(נ|אי|תי|הי|יי|ני|להי)",suffix:""},{prefix:"(תי|הי)",suffix:"(י|ו|נה)"},{prefix:"נ",suffix:"(ים|ת|ות|תי|ה|נו|תם|תן|ו)"},{prefix:"יי",suffix:"ו"}]))return{v:!0};var r=[{prefix:"(מ|א|ת|י|נ)",suffix:""},{prefix:"תי",suffix:"נה"},{prefix:"מ",suffix:"(ת|ים|ות)"},{prefix:"ת",suffix:"(י|ו|נה)"},{prefix:"י",suffix:"ו"},{prefix:"",suffix:"(תי|ת|ה|נו|תם|תן|ו)"},{prefix:"",suffix:""}];return A.some((function(t){return r.some((function(r){return new RegExp("^"+r.prefix+t[0]+"ו"+t[1]+t[2]+r.suffix+"$").test(e)}))}))||W(e,j,[{prefix:"(מו|הו|או|תו|יו|נו)",suffix:""},{prefix:"מו",suffix:"(ת|ים|ות)"},{prefix:"הו",suffix:"(תי|ת|ית|ה|נו|תם|תן|ו)"},{prefix:"תו",suffix:"(ו|נה|י)"},{prefix:"יו",suffix:"ו"}])?{v:!0}:void 0};for(r.s();!(t=r.n()).done;){var o=n();if("object"===O()(o))return o.v}}catch(e){r.e(e)}finally{r.f()}return!1}var I=function(e){i()(u,e);var t,r,n=(t=u,r=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,n=c()(t);if(r){var o=c()(this).constructor;e=Reflect.construct(n,arguments,o)}else e=n.apply(this,arguments);return s()(this,e)});function u(e){var t;return o()(this,u),delete(t=n.call(this,e)).defaultResearches.getFleschReadingScore,Object.assign(t.config,{language:"he",passiveConstructionType:"morphological",firstWordExceptions:y,functionWords:l,transitionWords:x,twoPartTransitionWords:d,sentenceLength:v}),Object.assign(t.helpers,{createBasicWordForms:g,getStemmer:S,isPassiveSentence:E}),t}return u}(p.languageProcessing.AbstractResearcher)}]);