
<!--Extend introduction-->

<section id="extend1">
	<h1> <code>&:extend</code> </h1>
	<p>You can apply your "extended"-selectors(p1, p2 ,p3) with the selector <code>&:extend</code> onto your class (.fontcolor) without any reference, because it is not css.</p>
	<p class="p1">The first sentence with a font-size of 14px, but the same font-color with .fontcolor-class.</p>
	<p class="p2">The second sentence with a font-size of 16px, but the same font-color with .fontcolor-class.</p>
	<p class="p3">The third sentence with a font-size of 18px, but the same font-color with .fontcolor-class.</p>
<pre>
.fontcolor{
	color: @example-font-color;
	}

<span class="pre-comment">//Now I use &:extend for .fontcolor</span>

.p1{
 	&:extend(.fontcolor);
 	font-size: 14px;
}

.p2{
	 &:extend(.fontcolor);
 	font-size: 16px;
}

.p3{
 	&:extend(.fontcolor);
 	font-size: 18px;
}



	/*Variables*/
	@example-font-color: #2243d1;
</pre>
</section>



<!--Extend Syntax-->

<section id="extend2">
	<h3>
	<code>&:extend</code> Syntax
	</h3>
	<p>
	<code>&:extend</code> is attached to a selector or placed into a ruleset.<br/>
	you can write <code>&:extend</code> in two ways:
	</p>
<pre>
.a:extend(.fontcolor){				Example A
 	font-size: 16px;
	}


.a{
 	&:extend(.fontcolor);			Example B
 	font-size: 16px;
 	}
</pre>
	<p>
		You can <code>&:extend</code> all instances of a class ,with "all":
	</p>
<pre>
.a:extend(.fontcolor all){
 <span class="pre-comment">//extends all instances of .fontcolor (for example: .fontcolor.fontsize, .fontweight.fontcolor)</span>
}

.a:extend(.fontcolor){
<span class="pre-comment">//extends only .fontcolor</span>
}
</pre>
	<p>
	You can extend one or more classes by using a comma to seperate them:
	</p>
<pre>
.a:extend(.fontcolor){
	
}
.a:extend(.fontsize){
	
}
<span class="pre-comment">//Both versions do the same thing:</span>

.a:extend(.fontcolor, .fontsize){
	
}
</pre>
</section>




<!--Extend attached to selector-->

<section id="extend3">
	<h3><code>&:extend</code> attached to selector</h3>
	<p>
		<code>&:extend</code> attached to selector, looks like a pseudo-class with selector as a parameter.<br/>
		You can put multiple extend clauses into a selector, but you have to put the extends at the end of the selector.
	</p>
<pre>
pre:hover:extend(.fontcolor .fontsize)<span class="pre-comment">//After the selector</span>
pre:hover :extend(.fontcolor .fontsize)<span class="pre-comment">//After the selector, with a space in between</span>
pre:hover:extend(.fontcolor .fontsize):extend(div pre)<span class="pre-comment">//Multiple extends</span>
pre:hover:extend(.fontcolor .fontsize, div pre)<span class="pre-comment">//Multiple extends (does the same)</span>
<span class="pre-comment"> //Extend must be last !!!</span>
</pre>
	<p>
	If a ruleset contains of multiple selectors, each of the selectors can have <code>&:extend</code>.
	</p>
<pre>
.a-class,
.b-class:extend(.fontcolor),
.c-class:extend(.fontsize){
	<span class="pre-comment">//Body</span>
}
</pre>
</section>




<!--Extend inside ruleset-->

<section id="extend4">
	<h3>
		<code>&:extend</code> inside ruleset
	</h3>
	<p>
		You can put <code>&:extend</code> into a ruleset's body. This means you dont have to put 
		<code>&:extend</code> after each selector of this ruleset. Both works though.<br />
		Inside ruleset:
	</p>
	<pre>
pre:hover,
.a-class{
	&:extend(div pre);
} <span class="pre-comment">//Into a ruleset's body</span>
	</pre>
	<p>
	After each selector:
	</p>
	<pre>
pre:hover:extend(div pre),
.a-class:extend(div pre){
<span class="pre-comment">//Body</span>
} <span class="pre-comment">//After each selector of this ruleset</span>
	</pre>
</section>


<!--Extending nested Selectors-->

<section id="extend5">
	<h3>
		Extending nested Selectors
	</h3>
	<p>
		<code>&:extend</code> is able to match nested selectors.
	</p>
	<pre>
.class{
	article{
		color: red;
	}
}

.a-class:extend(.class article){
	color: red;
}
	</pre>

	<h5>
		Output:
	</h5>
	<pre>
.class article,
.a-class{
	color: red;
}
	</pre>
	<p>
		<code>&:extend</code> looks at the compiled css, not the original less
	</p>
	<pre>
.class{
	article & {
		color: red;
	}
}

.a-class:extend(article .class){
	color: red;
}
	</pre>
	<h5>
		Output:
	</h5>
	<pre>
article .class,
.a-class{
	color: red;
}
	</pre>
</section>



<!--Exact Matching with Extend-->

<section id="extend6">
	<h3>
		Exact Matching with <code>&:extend</code>
	</h3>
	<p>
		<code>&:extend</code> by default looks for exact match between selectors. Exact spelling matters to match selectors,
		except quotes in attribute selectors. 
		Leading star, order of pseudo-classes and nth-expressions form <strong>matters</strong>.<br />
		Examples:
	</p>
	<pre>
.a-class.b-class,
.b-class.a-class,
.b-class > a-class{
	color: blue;
}

c-class:extend(.b-class){} <span class="pre-comment">//Will not match any selector above</span>
	</pre>
	<p>
		<strong>Leading Star</strong> matters. Selectors <code>*a-class</code> and <code>a-class</code> are the same, but <code>&:extend</code> <u>will not match them</u>.
	</p>
	<pre>
*.a-class{
	color: red;
}

.b-class:extend(.a-class){} <span class="pre-comment">//Will not match the selector above</span>
	</pre>
	<p>
		<strong>Order of pseudo-classes</strong> matters. Selectors <code>a:hover:visited</code> and <code>a:visited:hover</code> matching the same set of elements, but <code>&:extend</code> <u>treats them as different</u>.
	</p>
	<pre>
a:hover:visited{
	color: green;
}
.a-class:extend(a:visited:hover){} <span class="pre-comment">//Will not match the selectors above</span>
	</pre>
	<p>
		<strong>Nth expression</strong> form matters. Nth-Expressions <code>1n+3</code> and <code>n+3</code> are the same, but <code>&:extend</code> <u>will not match them</u>.
	</p>
	<pre>
:nth-of-type(1n+5) {
  color: blue;
}
.a-class:extend(:nth-of-type(n+5)) {} <span class="pre-comment">//Will not match the nth-expression above</span>
	</pre>
	<p>
		<strong>Quote type</strong> in attribute selector doesn't matter. Every type is the same and <code>&:extend</code> <u>will match them</u>.
	</p>
	<pre>
[title=Example] {
  color: green;
}
[title='Example'] {
  color: green;
}
[title="Example"] {
  color: green;
}

.a-class:extend([title=identifier]) {}
.b-class:extend([title='identifier']) {}
.c-class:extend([title="identifier"]) {} <span class="pre-comment">//Every quote type matches three times</span>
	</pre>
	<p>
		<strong>Output</strong>
	</p>
	<pre>
[title=Example],
.a-class,
.b-class,
.c-class {
  color: green;
}

[title='Example'],
.a-class,
.b-class,
.c-class {
  color: green;
}

[title="Example"],
.a-class,
.b-class,
.c-class {
  color: green;
}
	</pre>
</section>

<section id="extend7">
	<h3>
		<code>&:extend</code> "all"
	</h3>
	<p>
		If you put "all" last in an extend argument, Less matches that selector as part of another selector.
		The extending selector duplicates and gets replaced by the extended selector
	</p>
	<pre>
.a.b.test-class,
.test-class.c{
	color: purple;
}

test-class{
	&:hover{
		color: pink;
	}
}
replacement-class:extend(.test-class all){} 
	</pre>
	<p>
		<strong>Output</strong>
	</p>
	<pre>
.a.b.test-class,
.test-class.c,
.a.b.replacement-class,
.replacement-class.c{
	color: purple;
}

.test-class:hover{
.replacement-class:hover{
		color: pink;
}
<span class="pre-comment">//Selectors got copied and replaced by .replacement-class. All new Selectors (.replacement-class(es)) <u>also</u> have the color: purple; and :hover color: pink;</span>
	</pre>
</section>



<section id="extend8">
	<h3>
		Selector Interpolation with <code>&:extend</code>
	</h3>
	<p>
		<code>&:extend</code> can not match selectors with variables.<br />
		Example:
	</p>
	<pre>
<span class="pre-comment">Selector with variable will not match:</span>


@variable-selector: .a-class;
@{variable-selector} { 
	color: yellow;
}

.b-class:extend(.a-class) {} <span class="pre-comment">// no match found, will not do anything.</span>


<span class="pre-comment">extend with variable in target selector will not match either:</span>


.a-class{ 
	color: yellow;
}

.b-class:extend(@variable-selector) {} <span class="pre-comment">// no match found, will not do anything.</span>
@variable-selector: .a-class;
	</pre>
	<p>
		Both Versions compile into:
	</p>
	<pre>
.a-class {
  color: yellow;
}
	</pre>
	<p>
		Nevertheless, <code>&:extend</code> attached to an interpolated selector <u>works</u>:
	</p>
	<pre>
.a-class{
	color: green;
}

@{variable-selector}:extend(.a-class){}

@variable-selector: .b-class;
	</pre>


</section>