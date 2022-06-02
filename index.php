<html>
  <head>
    <title>RTBZ-Location</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
  </head>
  <body>
    <h1>RTBZ-Location</h1>

      <svg version="1.1" id="svg-editor-canvas" x="0px" y="0px" class="canvas" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" xml:space="preserve">
        <g id="svg-engine">
          <g type="container-shape" ng-click="clickOnItem($event,shape)" ng-class="{'active': shape.selected, 'dragging': dragging}" ng-right-click="rightClick($event)" class="logo-item ng-scope" ng-if="shape.type == 'logo' || shape.type == 'shape'" ng-attr-transform="translate({{(shape.symetrieX == 1 ? shape.x : shape.x + shape.width)}} {{(shape.symetrieY == 1 ? shape.y : shape.y + shape.height)}}) scale({{shape.width / shape.originalWidth * shape.symetrieX}} {{shape.height / shape.originalHeight * shape.symetrieY}}) rotate({{shape.rotate * shape.symetrieX * shape.symetrieY}} {{shape.originalWidth / 2}} {{shape.originalHeight / 2}})" id="shape-3" ng-mousedown="mouseDownItem($event,shape)" ng-mouseover="mouseUpItem($event,shape)" ng-mouseout="mouseOutItem($event,shape)" transform="translate(809 160.27728271484375) scale(2.419842674005197 2.4198423424879882) rotate(0 57.85500717163086 41.293067932128906)">
            <g type="shape" class="svg-item ng-pristine ng-untouched ng-valid ng-isolate-scope ng-not-empty" ng-model="shape" ng-shape="" ng-click="skav($event, shape)">
              <path d="M55.126,70.65c-1.795,0.782-3.603,1.506-5.407,2.145c-7.832,2.855-15.612,4.525-22.297,4.525 c-12.683,0-17.984-6.009-14.984-14.73c-7.156,11.532-2.229,19.996,13.335,19.996c11.632,0,26.458-4.733,39.528-11.936H55.126z" ng-click="mouseDown($event,0)" id="PATH_3_0" fill="#f6921e" class="ng-scope"></path>
              <path d="M98.675,7.958c0.018,0.052,0.041,0.101,0.057,0.153C98.649,8.05,98.552,8,98.468,7.939 c-1.572-0.16-3.239-0.249-5.02-0.249c-19.744,0-46.34,10.123-66.385,24.286h10.882c3.651-2.18,7.435-4.211,11.287-6.054 c3.946-1.933,7.986-3.64,12.009-5.063c10.533-3.842,20.998-6.088,29.99-6.088c17.059,0,24.188,8.082,20.153,19.813 C120.155,20.45,115.426,9.747,98.675,7.958z" ng-click="mouseDown($event,1)" id="PATH_3_1" fill="#26a9e0" class="ng-scope"></path>
              <path d="M4.561,76.67C2.442,72.092,3.45,65.984,7.756,59.042H1.882C-1.361,66.524-0.378,72.725,4.561,76.67z" ng-click="mouseDown($event,2)" id="PATH_3_2" fill="#26a9e0" class="ng-scope"></path>
              <path d="M81.8,4.734c7.621-0.487,13.209,0.719,16.668,3.205c0.068,0.007,0.14,0.012,0.207,0.02 C96.942,2.464,90.337-0.606,79.298,0.1C58.634,1.421,29.993,15.459,13.659,31.976h5.22C36.729,17.473,62.599,5.962,81.8,4.734z" ng-click="mouseDown($event,3)" id="PATH_3_3" fill="#f6921e" class="ng-scope"></path>
            </g>
          </g>
        </g>
        <g ng-repeat="shape in logo.shapes   | orderBy:'zindex'" ng-if="$root.removeAll != true" class="ng-scope"> 
          <g symetrie="1" ng-dblclick="test($event)" on-change="changeText(shape)" ng-model="shape" ng-click="clickOnItem($event,shape)" ng-right-click="rightClick($event)" ng-class="{'active': shape.selected}" class="contenteditable logo-item ng-pristine ng-untouched ng-valid ng-scope ng-not-empty" ng-attr-transform="translate({{(shape.symetrieX == -1) ? (shape.x + shape.width) : shape.x }} {{shape.y + (shape.bbox.y * -1 * shape.ratio)}}) scale({{(shape.symetrieX == -1) ? shape.ratio * -1 : shape.ratio}} {{shape.ratio}})" ng-if="shape.type == 'text'" id="shape-1" ng-mousedown="mouseDownItem($event,shape)" ng-mouseover="mouseUpItem($event,shape)" ng-mouseout="mouseOutItem($event,shape)" transform="translate(756 285.1216026292368) scale(0.8777741151292084 0.8777741151292084)" contenteditable="false">
            <text ng-if="shape.type == 'text'" ng-class="{'editing-text': $root.editing &amp;&amp; activeShape == shape}" class="real-text ng-binding ng-scope" id="text-1" dominant-baseline="auto" alignment-baseline="auto" font-family="Ethnocentric Rg" font-size="55px" fill="#232323" ng-attr-dx="{{shape.dx}}" xml:space="preserve" dx="0 0 0 0 0 0 0 0 0 0 0 0 0">RTBZ-LOCATION</text>
              </g>
        </g>
        <g ng-repeat="shape in logo.shapes   | orderBy:'zindex'" ng-if="$root.removeAll != true" class="ng-scope"> 
          <g symetrie="1" ng-dblclick="test($event)" on-change="changeText(shape)" ng-model="shape" ng-click="clickOnItem($event,shape)" ng-right-click="rightClick($event)" ng-class="{'active': shape.selected}" class="contenteditable logo-item ng-pristine ng-valid ng-scope ng-not-empty ng-touched" ng-attr-transform="translate({{(shape.symetrieX == -1) ? (shape.x + shape.width) : shape.x }} {{shape.y + (shape.bbox.y * -1 * shape.ratio)}}) scale({{(shape.symetrieX == -1) ? shape.ratio * -1 : shape.ratio}} {{shape.ratio}})" ng-if="shape.type == 'text'" id="shape-2" ng-mousedown="mouseDownItem($event,shape)" ng-mouseover="mouseUpItem($event,shape)" ng-mouseout="mouseOutItem($event,shape)" transform="translate(886 317.44619802394135) scale(1 1)" contenteditable="false">
            <text ng-if="shape.type == 'text'" ng-class="{'editing-text': $root.editing &amp;&amp; activeShape == shape}" class="real-text ng-binding ng-scope" id="text-2" dominant-baseline="auto" alignment-baseline="auto" font-family="'ADAM.CG PRO'" font-size="22px" fill="#232323" ng-attr-dx="{{shape.dx}}" xml:space="preserve" dx="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0">La location de confiance</text>
              </g>
        </g>             
      </svg>
  </body>
</html>