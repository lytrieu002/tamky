const siteUrl = "https://gis.dut.udn.vn";
///////////////////////////////////////////////////////////
var proj = new ol.proj.Projection({
   code: "EPSG:4326",
   units: "degrees",
   axisOrientation: "neu",
   //global: false,
});

const bounds = [108.5, 15.5, 108.5, 15.6];
var view = new ol.View({
   projection: proj,
   extent: bounds,
   //center: centerCoord,
   //zoom: 14.28,
});
//-------- Base map --------
var osmBaseMap = new ol.layer.Tile({
   title: "OpenStreet Map",
   baseLayer: true,
   visible: false,
   source: new ol.source.OSM(),
});

//Main map
var map = new ol.Map({
   target: "map",
   interactions: ol.interaction.defaults({
      altShiftDragRotate: false,
      pinchRotate: false,
   }),
   layers: [
      osmBaseMap,
   ],
   controls: ol.control.defaults().extend([new ol.control.ZoomSlider()]),
   view: view,
});


map.getView().fit(bounds, map.getSize());
var geoloc = new ol.control.GeolocationButton({
   title: "Vị trí của bạn",
   zoom: 20,
   followTrack: false,
   delay: 86400000, // delay before removing the location in ms, delfaut 3000
});
map.addControl(geoloc);
