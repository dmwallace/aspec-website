import gmaps from '../gmaps';

export default {
  init() {

    let mapData = JSON.parse(document.getElementById('officeLocationsMap').getAttribute('data-mapData'));
    console.log("mapData", mapData);

    gmaps(mapData.google_maps_api_key).then(()=>{
      /* global google */

      let map = new google.maps.Map(document.getElementById('officeLocationsMap'), {});

      let geocoder = new google.maps.Geocoder();

      let bounds = new google.maps.LatLngBounds();

      mapData.locations.forEach((address)=>{
        geocoder.geocode({'address': address}, function (results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
            bounds.extend(results[0].geometry.location);
            map.fitBounds(bounds);

            new google.maps.Marker({
              map: map,
              position: results[0].geometry.location,
              icon: {
                url: mapData.icon_url,
                scaledSize: new google.maps.Size(64, 64),
                anchor: new google.maps.Point(32, 32),
              },
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        })
      })
    })
  },
};
