<section id="variables">

<h2> 
Variables 
</h2>

<p>
I am creating easy Variables firstly.
</p>

<p>
I used @example-color 2 times now.
</p>

<p class="hover">
And even hover with this color.
</p>
<pre>

pre{
	h2{
		color: @example-color-gre;
		text-align: center;
		}
	h2:hover{
		color: darken(@example-color-gre, 10%)
		}
	p{
		color: @example-color-gre;
		text-align: center;
		}
	p{
		color: @example-color-gre;
		}
	.hover:hover{
		color: lighten(@example-color-gre, 30%)
		}
	}	
}

		/*Variables*/


	@example-color-gre: #53b91b;
	@example-color-yel: #fcda1f;
	@example-color-or: #fbb714;
	@example-color-bla: #000000;
</pre>
</section>

<section id="interpolation">

<h2>
Variable Interpolation
</h2>

<p id="interpolation-p1"> 
We used variables to work with css values.
We can also use variables on selector names, property names, Urls and @import(s)
</p>


<p class="blackbox">
The class I am using for this p-tag is "blackbox", but in my less file I use @bbox: blackbox;
</p>

<pre>
.@{bbox}{
	background-color: @example-color-bla;
	color: @example-color-or;
}
	/*Variable*/
	@bbox: blackbox;

	@example-color-gre: #53b91b;
	@example-color-yel: #fcda1f;
	@example-color-or: #fbb714;
	@example-color-bla: #000000;
</pre>

<article>
Here , I use @pic: "../images"; to have a faster way to get to "images"-folder.
Afterwards I just have to select the file "less.png"
Example below:
</article>

<pre>							
article{
	background: url("@{pic}/less.png");
	background-repeat: no-repeat;
	background-size: 50%;
	background-position: center;
}

		  /*Variable*/
		@pic: "../images";
</pre>


		<p id="interpolation-p2">
			I changed the "color"-property to "farbe"----><br />
<pre>
#interpolation-p2{
	@{farbe}: @example-color-gre;
}
	/*Variable*/
	@farbe : color;
</pre>
		</p>


		<p id="interpolation-p3">
			I've given the variable a name.
<pre>
#interpolation-p3{
	content: @@var;
}

	/*Variable*/
	@name : "erikalexanderbalonier";
	@var : "name";
</pre>
		</p>
</section>




<section id="lazyloading">
	<h2>
		Lazy Loading
	</h2>

	<article class="snippet">
		Example one: Snippet Version 
<pre>
.snippet{
	width: @testwidth;
	@realwidth: 30%;
}

	/*Variable*/
	@testwidth: @realwidth;
</pre>
	</article>

	<article class="ovalid">
			Example two: Another valid Version of Less 
<pre>
.ovalid{
	width: @testwidth;
}
				
	/*Variable*/
	@testwidth: @realwidth;
	@realwidth: 40%;
</pre>
		</article>

<article class="morevariables">
	If a variable is defined twice, the last definition scope upwards is used.<br />
<pre>
.morevariables{
	@var1 : 1;
	.class1{
		@var1 : 2;
		.class2{
			@var1 : 3;
			cba : @var1;
		}
		abc: @var1;
	}
}
</pre>
Compiles to:
<pre>
.class1{
	abc : 2;
}
.class1 .class2{
	cba : 3;
}
</pre>
</article>

<section id="defaultvariables">
	<h2>
		default variables
	</h2>
	<p class="examplecolor">
		You can easily override variables.<br />
		For Example: 
	</p>
<pre>
#defaultvariables{
	color: @base-color;

	
}
	/*Variables*/
@base-color: #5334b7;          <strong>default</strong>
@dark-base-color:darken(@base-color, 20%);
@base-color: #b725a4;          <strong>override</strong>
</pre>
<p>
	you can easily override the variable by putting it after the default.<br />
	Also after <code>@import</code> of a library.<br />
	The darker color also changes to the override.

</p>
</section>
<p class="next">
<a href="index.php?page=extend">NEXT</a>
</p>