<template>

  <div >
    
    <div  v-if="info" style="position: absolute; height: 90%; max-width: 576px; z-index: 1000; opacity: 0.95; overflow: scroll;" class="bg-light p-4">
      <div style="d-flex justify-content-end" v-on:click="close">
        <img src="/img/illu/close.svg" alt="" style="height : 20px">
      </div>

      
        
       
      <info-component :id="infoid"></info-component>
    </div>
    <div v-if="isMobile == false" class="d-flex justify-content-end">

     
      <div style="position: absolute; height: 90%; width: 22vw; z-index: 1000; opacity: 0.95; overflow: scroll;" class="bg-primary scrool">

        <div class="list-group" v-for="data in localisations" >
          <a v-if="infoid == data.id" v-on:click="show" @click='clickMarker(data.id), changezoom(data.Localisation)' class="list-group-item list-group-item-action active-primary " aria-current="true" :id="'#'+ data.id">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1 baskerville"><b>{{data.Nom_formation}}</b></h5>
            <small v-if="data.Pays == 'Canada'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#2A3B5C' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
            </small>
            <small v-if="data.Pays == 'United States'">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db5239' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
            </small>
            <small v-if="data.Pays == 'United Kingdom'">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#A8510A' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
            </small>
            <small v-if="data.Pays == 'Ireland'">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#88a845' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
            </small>
            <small v-if="data.Pays == 'Australia'">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#927cd9' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
            </small>
            <small v-if="data.Pays == 'India'">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db3985' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
            </small>
            <small v-if="data.Pays == 'New Zealand'">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db7c2e' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
            </small>
          </div>
          <p class="mb-1">{{data.Nom_universite}}</p>
          <small><span class="d-flex"><svg xmlns="http://www.w3.org/2000/svg" height="18px"
            viewBox="0 0 24 24" width="14px"  fill="#000000">
            <path d="M0 0h24v24H0z" fill="none" />
            <path
              d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
          </svg> {{ data.Ville }} </span></small>
          </a>
        <a  v-if="infoid != data.id" v-on:click="show" @click='clickMarker(data.id),changezoom(data.Localisation)' class="list-group-item list-group-item-action " aria-current="true"  :id="'#'+ data.id">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1 baskerville"><b>{{data.Nom_formation}}</b> </h5>
            <small v-if="data.Pays == 'Canada'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#2A3B5C' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
            </small>
            <small v-if="data.Pays == 'United States'">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db5239' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
            </small>
            <small v-if="data.Pays == 'United Kingdom'">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#A8510A' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
            </small>
            <small v-if="data.Pays == 'Ireland'">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#88a845' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
            </small>
            <small v-if="data.Pays == 'Australia'">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#927cd9' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
            </small>
            <small v-if="data.Pays == 'India'">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db3985' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
            </small>
            <small v-if="data.Pays == 'New Zealand'">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db7c2e' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
            </small>
          </div>
          <p class="mb-1">{{data.Nom_universite}}</p>
          <small><span class="d-flex"><svg xmlns="http://www.w3.org/2000/svg" height="18px"
            viewBox="0 0 24 24" width="14px"  fill="#000000">
            <path d="M0 0h24v24H0z" fill="none" />
            <path
              d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
          </svg> {{ data.Ville }} </span></small>
        </a>
       </div>
      </div>
    </div>
    

    <l-map
      v-if="isMobile == false"
      
      :zoom="zoom"
      :center="center"
      :options="mapOptions"
      
      style="height: 90%; width: 78vw;"
      
      
    >
      <l-tile-layer
        :url="url"
        :attribution="attribution"
      />
      <l-control-zoom position="topright" v-if="isMobile == false" ></l-control-zoom>
      
      
      <div v-for="data in localisations">
      <l-marker :lat-lng="[data.Localisation.split(',')[0], data.Localisation.split(',')[1]]" v-on:click="show" @click='clickMarker(data.id)' :href="'#'+ data.id" >
        
         <l-icon
          :icon-size="dynamicSize"
          
          
        >
          <div v-if="data.Pays == 'Canada'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#2A3B5C' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.Pays == 'United States'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db5239' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.Pays == 'United Kingdom'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#A8510A' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.Pays == 'Ireland'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#88a845' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.Pays == 'Australia'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#927cd9' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.Pays == 'India'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db3985' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          
          <div v-if="data.Pays == 'New Zealand'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db7c2e' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>

         
          <div class=" text-center">
            
          </div>
        </l-icon>
        

        <l-tooltip> 
         
          
          <div >
            {{data.Nom_formation}}
            
          </div>
        </l-tooltip>
        
      </l-marker>
      </div>

      <l-control position="bottomleft" v-if="info == false" >
        <div class="d-flex flex-column bg-light p-2" v-if="isMobile == false" >
          <v-text><b>Légende </b></v-text>
          <div  class="d-flex flex-column">
            <v-text class="display: flex">Australie : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='#927cd9' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">Canada : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='#2A3B5C' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">Inde : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='#db3985' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">Irelande : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='#88a845' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">Nouvelle Zelande : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='#db7c2e' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">United Kingdom : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='#A8510A' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>  </v-text>
            <v-text class="display: flex">United States : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='#db5239' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>  </v-text>

          </div>

        </div>
      </l-control>
      <l-control position="bottomright" v-else >
        <div class="d-flex flex-column bg-light p-2" v-if="isMobile == false" >
          <v-text><b>Légende </b></v-text>
          <div  class="d-flex flex-column">
            <v-text class="display: flex">Australie : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='#927cd9' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">Canada : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='#2A3B5C' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">Inde : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='#db3985' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">Irelande : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='#88a845' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">Nouvelle Zelande : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='#db7c2e' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">United Kingdom : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='#A8510A' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>  </v-text>
            <v-text class="display: flex">United States : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='#db5239' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>  </v-text>

          </div>

        </div>
      </l-control>
      
    </l-map>

    <l-map
      v-if="isMobile == true"
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
      <l-control-zoom position="topright" v-if="isMobile == false" ></l-control-zoom>
      
      
      <div v-for="data in localisations">
      <l-marker :lat-lng="[data.Localisation.split(',')[0], data.Localisation.split(',')[1]]" v-on:click="show" @click='clickMarker(data.id)' :href="'#'+ data.id" >
        
         <l-icon
          :icon-size="dynamicSize"
          
          
        >
          <div v-if="data.Pays == 'Canada'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#2A3B5C' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.Pays == 'United States'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db5239' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.Pays == 'United Kingdom'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#A8510A' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.Pays == 'Ireland'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#88a845' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.Pays == 'Australia'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#927cd9' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          <div v-if="data.Pays == 'India'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db3985' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
          
          <div v-if="data.Pays == 'New Zealand'">
             <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"  fill='#db7c2e' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>
          </div>
         
          <div class=" text-center">
            
          </div>
        </l-icon>
        

        <l-tooltip> 
         
          
          <div >
            {{data.Nom_formation}}
            
          </div>
        </l-tooltip>
        
      </l-marker>
      </div>

      <l-control position="bottomleft" v-if="info == false" >
        <div class="d-flex flex-column bg-light p-2" v-if="isMobile == false" >
          <v-text><b> </b></v-text>
          <div  class="d-flex flex-column">
            <v-text class="display: flex">Australia : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='brown' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">Canada : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='red' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">India : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='pink' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">Ireland : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='green' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">United Kingdom : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='purple' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>  </v-text>
            <v-text class="display: flex">United States : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='blue' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>  </v-text>

          </div>

        </div>
      </l-control>
      <l-control position="bottomright" v-else >
        <div class="d-flex flex-column bg-light p-2" v-if="isMobile == false" >
          <v-text><b> </b></v-text>
          <div  class="d-flex flex-column">
            <v-text class="display: flex">Australia : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='brown' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">Canada : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='red' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">India : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='pink' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">Ireland : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='green' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg> </v-text>
            <v-text class="display: flex">United Kingdom : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='purple' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>  </v-text>
            <v-text class="display: flex">United States : <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="24px"  fill='blue' ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"  /></svg>  </v-text>

          </div>

        </div>
      </l-control>
      
    </l-map>
    
  </div>
  
</template>

<script>


import { latLng } from 'leaflet';
import { LMap, LTileLayer, LControl,LMarker,LCircleMarker,LTooltip,LFeatureGroup, LPopup, LControlLayers, LControlZoom, LIcon} from "vue2-leaflet";
import InfoComponent from './InfoComponent.vue';
import axios from 'axios';

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
      hover: 'fill :#2A3B5C',
      iconSize: 40,
      isActive: true,
      isMobile: false,
      infoid: '',
      master: [],
      zoom: 2.5,
      center: latLng(25, 10),
      url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
      attribution:
        '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
      withPopup: latLng(40.74881093824601, -73.98398554515835),
      localisations: [],
      currentZoom: 11.5,
      currentCenter: latLng(440.74881093824601, -73.98398554515835),
      showParagraph: false,
      mapOptions: {
        zoomSnap: 0.5,
        zoomControl: false
      },
      
    };

  },
  watch: { 
      	CurrentCenter: function(newVal, oldVal) { // watch it
             console.log('Center changed: ', newVal, ' | was: ', oldVal)
             this.center = newVal;
             this.currentCenter = newVal;

        },

        zoom: function(newVal, oldVal) { // watch it
          console.log('Zoom changed: ', newVal, ' | was: ', oldVal)

        },
        
        
      },
  mounted() {
    this.onResize()
      window.addEventListener('resize', this.onResize, {
        passive: true
      })
    axios
        .get('../api/masters')
        .then(response => (this.localisations = response.data))
    
  },
  computed: {
    dynamicSize() {
      return [this.iconSize /1.8, this.iconSize ];
    },

    
    
  },
  methods: {
    onResize() {
        this.isMobile = window.innerWidth < 600
      },
    
    zoomUpdate(zoom) {
      this.currentZoom = zoom;
    },
    centerUpdate(center) {
      this.currentCenter = center;
    },

    clickMarker(id) {
        this.infoid = id;
       
        
    },

    changezoom(zoomi) {
      this.zoom = 8;
      
      this.center = latLng(zoomi.split(',')[0], (zoomi.split(',')[1])-1);
      
      },

    
    

    
    
    
    show: function () {
      
        if (this.info == false) {
          this.info = true;
          
          this.hover = 'fill: #D9B391';
        } 

    },
    close: function () {
      if (this.info == true) {
          this.info = false;
          
          this.hover = 'fill: #2A3B5C';
     }
    }
  },
};
</script>
