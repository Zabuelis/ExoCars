# ExoWheels

- ExoWheels is a full stack system designed for car dealerships.
- It allows users to see all the stock, register for meetings, cancel meeting, preview cars.
- It has an admin panel which allows admin users to insert, delete listings, remove user accounts, remove scheduled meetings.

## Dependencies

- The project is written using Laravel, Bootstrap, Laravel LiveWire.
- DB used in the project testing is PostgreSQL.
- Project uses minimal amounts of JavaScript for front-end responsiveness.

## Validation and Errors

- Every form is validated in HTML and PHP.
- Important forms such as user meeting creation or deletion have additional validators and logging to ensure safe creation.
- If creation of a form fails a specific error message is returned. It can be an alert or an actual error message specifying why it failed.

## Image Uploading

- Car images can be uploaded through admin panel.
- Image name is constructed of index (index is set by which position the image is sent i.e if it's the first image it will be 0_firstImage, 1_secondImage and similar) and original name.
- Folders for listing images are stored in public/images/listings/ catalogue.
- Folder name for each listing is constructed as of current date and time.

## Demonstration

![Home page](<Demonstration/Screenshot 2025-06-02 104922.png>)

![Listings page](<Demonstration/Screenshot 2025-06-02 104932.png>)

![Login page](<Demonstration/Screenshot 2025-06-02 105108.png>)

![Profile page](<Demonstration/Screenshot 2025-06-02 105211.png>)

![Register page](<Demonstration/Screenshot 2025-06-02 110954.png>)

![Preview page](<Demonstration/Screenshot 2025-06-02 111056.png>)

![Preview modal](<Demonstration/Screenshot 2025-06-02 111120.png>)

![Admin board](<Demonstration/Screenshot 2025-06-02 105220.png>)

![Admin board](<Demonstration/Screenshot 2025-06-02 105232.png>)

![Admin board](<Demonstration/Screenshot 2025-06-02 105239.png>)
