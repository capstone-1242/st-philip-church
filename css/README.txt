#Whenever you use SCSS

 sass --watch ./css/style.scss:./css/style.css


WARNING: For some reason sass is a pain in the ass so if you are using mixin or whateve (starts with @include).. make sure to declare the regular stuff first:

_______________________________________________

padding: 18px;
@include maxWidthCentered(1248px);

like that or else it will throw a warning


_________________________________________________

 Our SASS is divided into parts: 

 1. BASE FOLDER:
 a. _reset.scss = contains the reset styles 
 b. _typography.scss = fonts/text styles
 c. _colors.scss = color variables

 2. COMPONENTS FOLDER:
 so far i have: 
 a. button
 b. card
 etc...

 3. LAYOUT FOLDER:
 a. header
 b. footer
 c. grid
 d. flex 

 4. PAGES FOLDER
-contains the pages-

5. UTILITIES (for utility classes)