# Requirements
- Laravel Sail: https://laravel.com/docs/10.x/sail

## Load Images
Since we are looking for images in the storage/public folder, you need to make sure the FILESYSTEM_DISK in the .env file is set to public and you might need to create a storage link by executing the following command: 

*sail artisan storage:link*

## Tiny house Plaza

Tiny house Plaza is platofrm where you can both list and book tiny houses. I will walk you through its functionalities with a couple of gifs!

## USER FUNCTIONALITIES

### Pagination
![Pagination example](https://s12.gifyu.com/images/ezgif.com-video-to-gif821451910bdc69e9.gif)

### Search functionality

[![ezgif.com-video-to-gif-11a3a351c6be7acea.gif](https://s11.gifyu.com/images/ezgif.com-video-to-gif-11a3a351c6be7acea.gif)](https://gifyu.com/image/Sl9vy)

### Availability validation, so you are not able to book a date where the Tiny house is not available

[![ezgif.com-video-to-gif-2d80787f273a41a73.gif](https://s11.gifyu.com/images/ezgif.com-video-to-gif-2d80787f273a41a73.gif)](https://gifyu.com/image/SlESV)

### Multiple images

[![ezgif.com-video-to-gif-3da15156d73db3168.gif](https://s11.gifyu.com/images/ezgif.com-video-to-gif-3da15156d73db3168.gif)](https://gifyu.com/image/SlEbU)

### Update / Cancel a booking

[![ezgif.com-video-to-gif-463b7b222708aacb1.gif](https://s11.gifyu.com/images/ezgif.com-video-to-gif-463b7b222708aacb1.gif)](https://gifyu.com/image/SlExz)

### HOST FUNCTIONALITIES

### Rent out your Tiny House With Validation

![image](https://user-images.githubusercontent.com/17982931/234026553-3b284ab6-54f5-4364-b745-9692e7b3a592.png)




### Manage the Tiny Houses that you have listed

![image](https://user-images.githubusercontent.com/17982931/234026742-11d78d62-1510-4eb1-9b3f-d8b09c4e94a0.png)

### Edit your Tiny house

[![ezgif.com-video-to-gif-5.gif](https://s12.gifyu.com/images/ezgif.com-video-to-gif-5.gif)](https://gifyu.com/image/SlEN6)

- Update / Cancel a booking on your tiny house
- All ratings are averaged through a micro function

