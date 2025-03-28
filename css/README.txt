#Whenever you use SCSS

 sass --watch ./css/style.scss:./css/style.css


ALSO IF YOU'RE WORKING ON A PAGE. PLEASE CHANGE THE SECTION# SINCE IT IS NOT CONSISTENT WITH LOCAL AND THE ACTUAL SITE.. SO BETTER CHANGE THE ID OF WHATEVER PAGE YOU ARE WORKING ON AND THEN DO SECTION#, since it changes depending on the wordpress you are using

WARNING: For some reason sass is a pain in the ass so if you are using mixin or whateve (starts with @include).. make sure to declare the regular stuff first:



_______________________________________________

padding: 18px;
@include maxWidthCentered(1248px);

like that or else it will throw a warning


_________________________________________________

FOR THE BUTTONS OR A: 

just simple add "default-button" class to follow the red button styling



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