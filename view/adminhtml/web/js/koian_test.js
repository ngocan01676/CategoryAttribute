define([

   'underscore',

   'uiRegistry',

   'Magento_Ui/js/form/element/single-checkbox',

   'Magento_Ui/js/modal/modal',

   'ko'

], function (_, uiRegistry, select, modal, ko) {

   'use strict';

   return select.extend({


       initialize: function () {
           this._super();

           this.fieldDepend(this.value());

           return this;

       },

       onUpdate: function (value)
       {
        console.log(value);


           var field_max_val = uiRegistry.get('index = thumbnail_image'); // get field

           if (value == 0) {

              

               field_max_val.hide();
           }

           else {

              

               field_max_val.show();

           }
           return this._super();

       },
       fieldDepend: function (value)

       {
           setTimeout( function(){
             

               var field_max_val = uiRegistry.get('index = thumbnail_image');

                if (value == 0) {

                  

                   field_max_val.hide();
                }

               else {

                   

                   field_max_val.show();

               }

           });

       }
   });

});