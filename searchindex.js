// search index for WYSIWYG Web Builder
var database_length = 0;

function SearchPage(url, title, keywords, description)
{
   this.url = url;
   this.title = title;
   this.keywords = keywords;
   this.description = description;
   return this;
}

function SearchDatabase()
{
   database_length = 0;
   this[database_length++] = new SearchPage("index.html", "United Animations", "Copyright © 2022 United Animations  All Rights Reserved  Let us Know what you think  DAYS  HOURS  MINUTES  SECONDS   ", "");
   this[database_length++] = new SearchPage("index_with_breakpoint.html", "Awesome", "Awesome Lorem ipsum dolor sit amet, consectetur adipiscing elit Integer nec odio Praesent libero Sed cursus ante dapibus diam Sed nisi Nulla quis sem at nibh  Copyright © 2019 WYSIWYG Web Builder  All Rights Reserved  Lorem ipsum dolor sit amet, consectetur adipiscing elit Nulla quis sem at nibh elementum imperdiet Duis sagittis ipsum Praesent mauris Fusce nec tellus sed augue semper porta Mauris massa Vestibulum lacinia arcu eget nulla   ", "");
   this[database_length++] = new SearchPage("Movies.html", "Movies", "Copyright © 2022 United ANimations  All Rights Reserved  TURNING RED 2022  NO WAY HOME  DRAGONS HOMECOMING  GIFT OF NIGHT FURY  THE G.B.AND UGLY   ", "");
   this[database_length++] = new SearchPage("TV-Shows.html", "TV Shows", "Copyright © 2022 United Animations  All Rights Reserved   ", "");
   this[database_length++] = new SearchPage("Donate.html", "Login", "Copyright © 2022 United Animations  All Rights Reserved   ", "");
   this[database_length++] = new SearchPage("Animation-Scripts.html", "Animation Scripts", "Copyright © 2022 United Animations  All Rights Reserved  Double click to edit   UNDER DEVELOPEMNT    ", "");
   this[database_length++] = new SearchPage("Comic-Books.html", "Comic Books", "Copyright © 2022 United Animations  All Rights Reserved  Double click to edit   UNDER DEVELOPEMNT    ", "");
   this[database_length++] = new SearchPage("Our-Life.html", "Our Life", "Copyright © 2022 United Animations  All Rights Reserved  Double click to edit   UNDER DEVELOPEMNT    ", "");
   this[database_length++] = new SearchPage("Logout.html", "Logout", "Copyright © 2022 United Animations  All Rights Reserved  Double click to edit   UNDER DEVELOPEMNT    ", "");
   this[database_length++] = new SearchPage("Legend-of-Awesomeness.html", "Legend of Awesomeness", "Copyright © 2022 United Animations  All Rights Reserved  Double click to edit   ", "");
   this[database_length++] = new SearchPage("Family-Guy.html", "Family Guy", "Copyright © 2022 United Animations  All Rights Reserved  Double click to edit   ", "");
   this[database_length++] = new SearchPage("Teen-Titans-Go.html", "Teen Titans Go", "Copyright © 2022 United Animations  All Rights Reserved  Double click to edit   ", "");
   this[database_length++] = new SearchPage("Avengers-Assemble.html", "Avengers Assemble", "Copyright © 2022 United Animations  All Rights Reserved  Double click to edit   ", "");
   this[database_length++] = new SearchPage("Paws-of-Destiny.html", "Paws Of Destiny", "Copyright © 2022 United Animations  All Rights Reserved  Double click to edit   ", "");
   this[database_length++] = new SearchPage("Proud-Family.html", "Proud Family", "Copyright © 2022 United Animations  All Rights Reserved  Double click to edit   ", "");
   return this;
}
