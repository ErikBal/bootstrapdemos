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
<br />
<br />
<p class="blackbox">
The class I am using for this p-tag is "blackbox", but in my less file I use @bbox: blackbox;
</p>
<pre>
.@{bbox} {
	background-color: @example-color-bla;
	color: @example-color-or;

	/*Variable*/
	@bbox: blackbox;
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

											Variable
											@pic: "../images";
</pre>
		<p id="interpolation-p2">
			I changed the "color"-property to "farbe".-----><br />
			p{<br />
			@{farbe}: @example-color-gre;<br />
		</p>

		<p id="interpolation-p3">
			I've given the variable a name.
		</p>

</section>
<section id="lazy-loading">

		<h2>
			Lazy Loading
		</h2>

		<p class="snippet">
			Example one: Snippet Version (variable inside less)<br />
			.snippet{<br />
				width: @testwidth;<br />
				@realwidth: 30%;<br /><br />
				/*Variable*/<br />
				@testwidth: @realwidth;
		</p>
		</section>
		<code>
			Example two: Another valid Version of Less (variables in extra section)<br />
			.ovalid{<br />
				width: @testwidth;<br /><br />
				/*Variable*/<br />
				@testwidth: @realwidth;<br />
				@realwidth: 40%;
		</code>
		<p class="morevariables">
		   In a definition the last variable is used, if its defined twice.<br />
		That means you can easily override variables.
		</p>
		<p class="morevariables2">

		</p>

		<pre>
			<code>
		 		hhjhj]
		    	kjkj 
		      	kjkj
		      </code>
		</pre>

<code>
ga
</code>