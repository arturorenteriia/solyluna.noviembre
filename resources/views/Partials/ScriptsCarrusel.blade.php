<style>
    /* jssor slider arrow navigator skin 21 css */
    /*
    .jssora21l                  (normal)
    .jssora21r                  (normal)
    .jssora21l:hover            (normal mouseover)
    .jssora21r:hover            (normal mouseover)
    .jssora21l.jssora21ldn      (mousedown)
    .jssora21r.jssora21rdn      (mousedown)
    */
    .jssora21l, .jssora21r {
        display: block;
        position: absolute;
        /* size of arrow element */
        width: 55px;
        height: 55px;
        cursor: pointer;
        background: url(images/a21.png) center center no-repeat;
        overflow: hidden;
    }
    .jssora21l { background-position: -3px -33px; }
    .jssora21r { background-position: -63px -33px; }
    .jssora21l:hover { background-position: -123px -33px; }
    .jssora21r:hover { background-position: -183px -33px; }
    .jssora21l.jssora21ldn { background-position: -243px -33px; }
    .jssora21r.jssora21rdn { background-position: -303px -33px; }
</style>

<style>
    /* jssor slider bullet navigator skin 21 css */
    /*
    .jssorb21 div           (normal)
    .jssorb21 div:hover     (normal mouseover)
    .jssorb21 .av           (active)
    .jssorb21 .av:hover     (active mouseover)
    .jssorb21 .dn           (mousedown)
    */
    .jssorb21 {
        position: absolute;
    }
    .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
        position: absolute;
        /* size of bullet elment */
        width: 19px;
        height: 19px;
        text-align: center;
        line-height: 19px;
        color: white;
        font-size: 12px;
        background: url(images/b21.png) no-repeat;
        overflow: hidden;
        cursor: pointer;
    }
    .jssorb21 div { background-position: -5px -5px; }
    .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
    .jssorb21 .av { background-position: -65px -5px; }
    .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
</style>
<style></style>