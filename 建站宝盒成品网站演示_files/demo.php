var html = '<style>\
    #contact_dialog *{\
        box-sizing: border-box;\
    }\
    #contact_dialog{\
        position: fixed;\
        right: 0;\
        top: 50%;\
        z-index: 999999;\
        background: #fff;\
        width: 200px;\
        box-shadow: 0 0 10px rgba(0,0,0,.1);\
        text-align: center;\
        margin-top: -120px;\
        border-radius: 4px;\
    }\
    #contact_dialog>div{\
        position: relative;\
        z-index: 1;\
        padding: 20px;\
    }\
    #contact_dialog .close_icon{\
        position: absolute;\
        z-index: 10;\
        right: 5px;\
        top: -10px;\
        font-size: 16px;\
        color: #666;\
        display: block;\
        width: 20px;\
        height: 20px;\
        line-height: 20px;\
        cursor: pointer;\
        box-shadow: 0 0 5px rgba(0,0,0,.2);\
        background: #fff;\
        border-radius: 100px;\
        transition: all .2s;\
    }\
    #contact_dialog .close_icon:hover{\
        transform: rotate(180deg);\
    }\
    #contact_dialog h3{\
        font-weight: normal;\
        margin: 10px 0 15px;\
        font-size: 14px;\
    }\
    #contact_dialog p{\
        margin: 0;\
        padding: 0;\
        font-size: 14px;\
    }\
    #contact_dialog p span{\
        color: #c00;\
        font-family: Verdana,"Microsoft Yahei",Arial,sans-serif;\
        font-weight: bold;\
        font-size: 16px;\
    }\
    #contact_dialog .btn{\
        display: block;\
        height: 35px;\
        line-height: 35px;\
        text-decoration: none;\
        color: #fff;\
        text-align: center;\
        font-size: 14px;\
        transition: all .2s;\
        letter-spacing: 2px;\
        border-radius: 4px;\
    }\
    #contact_dialog .btn:first-of-type{ background: #c00; margin-bottom: 15px;}\
    #contact_dialog .btn:first-of-type:hover{ background: #e63636;}\
    #contact_dialog .btn:last-of-type{ background: #4DC0FF;}\
    #contact_dialog .btn:last-of-type:hover{ background: #3e90bd;}\
    @media screen and (max-width: 768px) {\
        #contact_dialog{\
            width: 80px;\
        }\
        #contact_dialog>div{\
            padding: 20px 10px 10px;\
        }\
        #contact_dialog h3{\
            margin: 10px 0;\
            font-size: 12px;\
        }\
        #contact_dialog p{\
            font-size: 12px;\
        }\
        #contact_dialog p span{\
            font-size: 14px;\
            display: block;\
            text-align: center;\
        }\
        #contact_dialog .btn{\
            font-size: 12px;\
            letter-spacing: 0;\
        }\
    }\
</style>\
<div id="contact_dialog">\
    <div>\
        <span class="close_icon" onclick="this.parentNode.parentNode.remove();">×</span>\
        <div class="info">\
            <p>H5模板编号：<span>3390</span></p>\
            <h3>【施尔战略咨询展示模板】</h3>\
        </div>\
        <a class="btn" href="https://www.iisp.com/public/freetrial.php?trykind=stationProducts" target="_blank">免费试用</a>\
        <a class="btn" href="https://www.iisp.com/customer/contact.php" target="_blank" > 立即咨询</a>\
    </div>\
    </div>\
';
if (window.top.location.href == window.location.href) {
    document.write(html);
}
var tophtml = '<style>.fixedBg {background: #FFFF00;position: fixed;top: 0;z-index: 1000000000;width: 100%;height: 40px;}\
.fixedText {text-align: center;line-height: 40px;font-weight: bold;}\
.fixedText a{color: #FF0000;}\
</style>\
<div class="fixedBg"><div class="fixedText"><a href="#">此模板为免费演示，未经版权人许可，不得做为商业用途！</a></div></div>\
';
if (window.top.location.href == window.location.href) {
    document.write(tophtml);
}