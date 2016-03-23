<!-- Carrousel -->
<!-- Jssor Slider Begin -->
<!-- To move inline styles to css file/block, please specify a class name for each element. -->
<div class="hide-on-med-and-down" id="slider1_container" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
    <!-- Loading Screen -->
    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
        <div style="position: absolute; display: block; background: url(images/loading.gif) no-repeat center center;top: 0px; left: 0px; width: 100%; height: 100%;"></div>
    </div>
    <!-- Slides Container -->
    <div u="slides" style=" position: absolute; left: 0px; top: 0px; width: 1300px;  height: 500px; overflow: hidden;">
        <div>
            <img u="image" src="images/tarde.jpg" />
            <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 400px; padding: 5px; text-align: center; line-height: 60px; text-transform: uppercase; font-size: 50px; color: #FFFFFF;">
                Welcome to paradise
            </div>
            <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 500px; padding: 5px; text-align: left; line-height: 36px; font-size: 30px; color: #FFFFFF;">
                <h3>  <font face="Monotype Corsiva"> We Care We Listen </font></h3>
            </div>
            {!! Form::open(['route' => 'vista2.vistapropiedad','name'=>"form1", 'method' => 'POST', 'files' => 'true', 'class' => 'col s12 m12 s3' ]) !!}
        </div>
        @foreach($images as $image)
            <div>
                {!! Form::text('property_id', $image->id,  ['class' => 'form-control']) !!}
                <a href="allresidences"  class="brand-logo " ><img u="image" src="uploads/{{ $image->image }}" /></a>
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 500px; padding: 5px; text-align: right; line-height: 60px; text-transform: uppercase; font-size: 50px; color: #FFFFFF;">{{ $image->name }}</div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 500px; padding: 5px; text-align: left; line-height: 36px; font-size: 30px; color: #FFFFFF;">
                    {{ $image->slogan }}
                </div>
            </div>
        @endforeach
        {!! Form::close() !!}
    </div>
    <!--#region Bullet Navigator Skin Begin -->
    <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
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
    <!-- bullet navigator container -->
    <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
        <!-- bullet navigator item prototype -->
        <div u="prototype"></div>
    </div>
    <!--#endregion Bullet Navigator Skin End -->
    <!--#region Arrow Navigator Skin Begin -->
    <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
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
    <!-- Arrow Left -->
        <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
        </span>
    <!-- Arrow Right -->
        <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
        </span>
    <!--#endregion Arrow Navigator Skin End -->
    <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
</div>
<!-- Jssor Slider End -->
<!-- Carrousel -->