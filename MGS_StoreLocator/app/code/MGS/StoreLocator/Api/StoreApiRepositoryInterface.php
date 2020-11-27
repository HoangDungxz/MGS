<?php 
namespace MGS\StoreLocator\Api;


interface StoreApiRepositoryInterface {

  /**
     To get the admin key, Login to Role Administrators or admin with Role Rources Store Locator-> Get Stores
     Method POST
   http://127.0.0.1/magento/rest/V1/integration/admin/token?username=admin&password=pass

     - To get all store
   Method GET
   http://127.0.0.1/magento/rest/getallstore/

     - Create an API to get the stores stored in the StoreLocator extension table (10 results), pass more param to get more for other pages (p = 2, p = 3 ...)
          + store[page] = Số trang;
          Default store[page]page = 1;
          
          Method GET
          http://127.0.0.1/magento/rest/getstore/?store[page]=1

       - Retrieves stores based on passed parameters (country, state, city, zipcode)
          + store[country] = country;
          + store[state] = state;
          + store[city] = city;
          + store[zipcode] = zipcode;
       If you want to get the store according to any param, add that param to the url after the &;
       EX
          Method GET
          http://127.0.0.1/magento/rest/getstore/?store[page]=1&store[country]=VN
          Method GET
          http://127.0.0.1/magento/rest/getstore/?store[page]=1&store[country]=VN&store[city]=Hà Nội

       - Retrieve stores by params (location, radius).

          + store[lat] = lat; Latitude
          + store[lng] = lng; Latitude
          + store[radius] = radius;
        EX
          Method GET
          http://127.0.0.1/magento/rest/getstore/?store[page]=1&store[country]=VN&store[lat]=21.019914

      There must be a params store [] on the url when retrieve stores by filter
   */

    /**
     * GET for GET api
     *
     * @param string[] $store
     * @return null
     */

 public function getStore(array $store);

  /**
    * GET for GET api
    * @param null
    * @return null
    */

  public function getALLStore();
}
