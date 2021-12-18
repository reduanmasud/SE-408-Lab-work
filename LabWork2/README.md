**CSS** 

**CSS** Cascading Style Sheet, is used for styling or designing a web page. By using CSS we can interactively design a web page. We can make our web page responsive using CSS.  

**CSS Syntax** 

Selector { property-1: value-1; property-2: value-2;} 

We have to catch a element form the html page vai a selector, then we have to set different property and its value according to needs inside a curly bracket. 

We can write in multiple line too. for ex; Selector {  

property-1: value-1;  property-2: value-2; 

} 

**CSS Selector** 

It is most important part of CSS. We need to know how we can select a or multiple element from html page. 

There are multiple ways of selecting an element, some will be describe here. **Select using tag name:** like body, h1, p; 

for example: 

body {  

background-color: red;  

} 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.002.jpeg)

*Figure 1: select via body tag background red* 

**Select using class:** there is an attribute in html element is class, for defining same class. We can use class for styling. To select an class we have to use class name followed by a .(dot). 

for example: .class-name 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.003.jpeg)

*Figure 2: class selector css* 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.004.jpeg)

*Figure 3: class selector css style* 

**Select using id:** We can also select an element using id. Id should be unique for an element. This will be a selector name followed by a #.  #id\_name; 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.005.png)

*Figure 4: select using id* 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.006.jpeg)

*Figure 5: id selector first red box;* 

there more selectors we will discuss them later. 

Now we will step by step design a page. 

for the page we will use external CSS. we can link an external CSS using link tag. <link rel="stylesheet" href="styles.css" /> 

Let’s build a html before styling it. 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.007.jpeg)

*Figure 6: HTML document* 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.008.jpeg)

*Figure 7: HTML document without CSS* 

Adding Height, Width and  background color at class-1 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.009.png)

*Figure 8: width, height and background color CSS* 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.010.jpeg)

*Figure 9: preview of after figure 8 code;* 

There We can see a gap before the red marked area. let’s remove those using margin, and border; 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.011.png)

*Figure 10: remove border and margin from all element* 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.012.jpeg)

*Figure 11: after removing margin and border* 

Now let’s make the h1 center and more big and give a padding 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.013.png)

*Figure 12: center, font size and padding* 

here ***.class\_name*** then ***h1***  means that only select the ***h1*** inside the class 1. 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.014.jpeg)

*Figure 13: h1 after padding, align and sizing* 

Now I will add some style at the p element of class-1. 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.015.png)

*Figure 14: formatting p tag* 

here line-height is used for every line in a paragraph. In every paragraph there will be 5 pixel margin at top and bottom; The text align is justified. and there will be a padding in every side is 10 pixel. 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.016.jpeg)

*Figure 15 after adding style in p tag;* 

Now I will add two div element at class-2. 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.017.png)

*Figure 16: two div added of id obj1 and obj2* and add a background color and height and width to the class-2 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.018.png)

*Figure 17: class-2 CSS* 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.019.jpeg)

*Figure 18: after adding CSS to class-2* 

Now I will add same CSS to that two obj using comma selector in CSS. I am going to give them same height and width and border; 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.020.png)

*Figure 19: adding same style in two element.* 

Here in the code *border-radius* is used for rounding the corners. here 50% make the element circular and *float* makes an element floating. obj1 and obj2 should come up to down wise but it will come left to right for the *float*. 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.021.jpeg)

*Figure 20: preview of figure 19 code* 

Now I will add border to this two object; 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.022.png)

*Figure 21: adding border;* 

first one is border-style, then border-width and border-color; 

![](Aspose.Words.9f0515d9-a995-41c8-bb9c-072200f85d04.023.jpeg)

*Figure 22: after adding border into the objects.* 

Source:[ https://reduanmasud.github.io/se408lab ](https://reduanmasud.github.io/se408lab)
PAGE9 
