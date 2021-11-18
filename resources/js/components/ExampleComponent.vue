<template>

  <div >
    
    <div  v-if="info" style="position: absolute; height: 90%; width: 30vw; z-index: 1000;" class="bg-light">
      <info-component></info-component>
    </div>
    <l-map
      v-if="showMap"
      :zoom="zoom"
      :center="center"
      :options="mapOptions"
      
      style="height: 90%; width: 100vw;"
      @update:center="centerUpdate"
      @update:zoom="zoomUpdate"
      
    >
      <l-tile-layer
        :url="url"
        :attribution="attribution"
      />
      <l-control-zoom position="topright"  ></l-control-zoom>
      
      

      <l-marker :lat-lng="withPopup" v-on:click="show">
        
         <l-icon
          :icon-size="dynamicSize"
          
          
        >
          
          <img src="/img/illu/school.svg">
          <div class=" text-center">
            
          </div>
        </l-icon>
        

        <l-tooltip> 
         
          
          <div >
            CUNY Graduate Center
            
          </div>
        </l-tooltip>
        
      </l-marker>
      
    </l-map>
    
  </div>
  
</template>

<script>


import { latLng } from 'leaflet';
import { LMap, LTileLayer, LControl,LMarker,LCircleMarker,LTooltip,LFeatureGroup, LPopup, LControlLayers, LControlZoom, LIcon, LWMSTileLayer} from "vue2-leaflet";
import InfoComponent from './InfoComponent.vue';

export default {
  name: 'Example',
  components: {
    LMap,
    LTileLayer,
    LMarker,
    LPopup,
    LCircleMarker,
    LControl,
    LFeatureGroup,
    LTooltip,
    LControlLayers,
    LControlZoom,
    LIcon,
    InfoComponent
    
  },
  data() {
    return {
      info: false, 
      
      iconSize: 40,
      
      zoom: 13,
      center: latLng(40.74881093824601, -73.98398554515835),
      url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
      attribution:
        '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
      withPopup: latLng(40.74881093824601, -73.98398554515835),
      
      currentZoom: 11.5,
      currentCenter: latLng(440.74881093824601, -73.98398554515835),
      showParagraph: false,
      mapOptions: {
        zoomSnap: 0.5,
        zoomControl: false
      },
      showMap: true,
    };

  },
  computed: {
    dynamicSize() {
      return [this.iconSize /1.8, this.iconSize ];
    },
    
  },
  methods: {
    
    zoomUpdate(zoom) {
      this.currentZoom = zoom;
    },
    centerUpdate(center) {
      this.currentCenter = center;
    },
    showLongText() {
      this.showParagraph = !this.showParagraph;
    },
    show: function () {
        if (this.info == false) {
          this.info = true;
        } else {
          this.info = false;
        }

      },
  },
};
</script>
