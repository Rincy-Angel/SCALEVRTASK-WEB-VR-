<!DOCTYPE html>

<html>
<head>
<title>360-viewer</title>
<meta charset="utf-8">

<script src="https://rawgit.com/aframevr/aframe/ba2a287/dist/aframe-v0.7.1.min.js"></script>
<script src="drag-look-controls.min.js"></script>
    </head>
    <body> 
         
    <a-scene cursor="rayOrigin: mouse">
        <a-assests>
        
        <img id="pano1" src="uploads/download%20(1).jpg">
            <img id="pano2" src="uploads/download%20(2).jpg">
            <img id="pano3" src="uploads/matches.jpg">
            
        </a-assests>
        <a-sky src="uploads/download.jpg" id="pano" rotation="0 0 0"></a-sky>
        <a-camera drag-look-controls>
        <a-cursor id="cursor">
            <a-animation begin="click" easing="ease-in" attribute="scale" fill="backwards" from="0.1 0.1 0.1" to="1 1 1" dur="500"></a-animation>
            </a-cursor>
        </a-camera>
        <a-text id="prev-txt" font="kelsonsans" value="<<" color="#F84" width="4" position="-0.6 1.5 -1.0">
        <a-animation attribute="rotation" begin="click" dur="500" fill="backwards" to="30 30 360"></a-animation>
            
        </a-text>
        <a-text font="kelsonsans" value="prev / next" color="#F84" width="3" position="-0.35 1.5"></a-text>
        <a-entity id="file-name" geometry="primitive: plane; width: 0.7; height: auto" material="opacity: 0.5; color: #f84" position="-0.0 1.35 -1.0" text="value: download.jpg; align: center">
        </a-entity>
        <a-text id="next-txt" font="kelsonsans" value=">>" color="#F84" width"4" position="0.4 1.5 -1.0">
        <a-animation attribute="rotation" begin="click" dur="500" fill="backwards" to="30 30 360"></a-animation>
            </a-text>
        <a-box prev-click="" sound="on: click; src: #click-sound" visible="false" color="#aa77dd" width="0.28" height="0.18" depth="0.01" opacity="0.5" position="-0.5 1.48 -1.0"></a-box>
        <a-box next-click="" sound="on: click; src: #click-sound" visible="false" color="#aa77dd" width="0.28" height="0.18" depth="0.01" opacity="0.5" position="-0.48 1.48 -1.0" ></a-box>
                
                </a-scene>
    
    </body>
</html>