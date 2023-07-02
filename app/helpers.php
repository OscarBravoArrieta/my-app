 <?php
     function setActive($ruteName){
         return request()->routeIs($ruteName) ? 'active' : '';
     }
