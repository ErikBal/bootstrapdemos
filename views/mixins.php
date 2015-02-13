<!--Mixins-->

<section id="mixin1">
	<h2>
		Mixins
	</h2>
	<p>
		You can mix-in class selectors and id selectors. For Example:
	</p>
	<pre>
.a-class, #b-id {
  color: green;
}
.mixin-class {
  .a-class();
}
.mixin-id {
  #b-id();
}

<span class="pre-comment">// which outputs in:</span>

.a-class, #b-id {
  color: green;
}
.mixin-class {
  color: green;
}
.mixin-id {
  color: green;
}

<span class="pre-comment">// Notice that when you call the mixin, the parentheses () are optional.</span>
	</pre>
</section>



<section id="mixin2">
	<h3>
		Not outputting the mixin
	</h3>
	<p>
		If you want to create a mixin but you do not want that mixin to be output, you can put parentheses () after it. Example:
	</p>
	<pre>
.mixin {
  color: red;
}
.not-outputting-mixin() {
  background: blue;
}
.test-class {
  .my-mixin;
  .not-outputting-mixin;
}

<span class="pre-comment">// which outputs in:</span>

.mixin {
  color: red;
}

.test-class {
  color: red;
  background: blue
}

<span class="pre-comment">// The .not-outputting-mixin does not show up.</span>
	</pre>
</section>



<section id="mixin3">
	<h3>
		Selectors in mixins
	</h3>
	<p>
		Not only properties can be in a mix-in, it can contain of selectors also.<br />
		For Example:
	</p>
	<pre>
.my-hover-mixin() {
  &:hover {
  	border: 1px solid blue;
  }
}

button {
  .my-hover-mixin();
}


<span class="pre-comment">// results in:</span>


button:hover {
  border: 1px solid red;
}
	</pre>
</section>



<section id="mixin4">
	<h3>
		Namespaces
	</h3>
	<p>
		If you want to mixin properties inside a more complicated selector, you can stack up multiple id's or classes.<br />
		For Example:
	</p>
	<pre>
#outer {
  .inner {
    color: green;
  }
}

.a-class {
  #outer > .inner;
}

<span class="pre-comment">// <u>></u> and <u>white spaces</u> do not matter.</span>
	</pre>
	<p>
		One use of this is known as namespacing. You can use a id selector and put your mixins under the id to avoid conflict with another library.
	</p>
	<pre>
#my-library {
  .my-mixin() {
    color: red;
  }
}
<span class="pre-comment"> // which can be used like this:</span>

.class {
  #my-library > .my-mixin();
}
	</pre>
</section>



<section id="mixin5">
	<h3>
		The <code>!important</code> keyword
	</h3>
	<p>
		Use the <code>!important</code> keyword after mixin call to mark all properties inherited by it as <code>!important</code>:
	</p>
	<pre>
.random-class (@bg: #f5f5f5, @color: #900) {
	background: @bg;
  	color: @color;
}
.unimportant {
  	.random-class();
}
.important {
  	.random-class() !important;
}
<span class="pre-comment">// which results in:---------------------------------------------------------------------------------------</span>

.unimportant {
  	background: #f5f5f5;
  	color: #900;
}
.important {
  	background: #f5f5f5 !important;
  	color: #900 !important;
}
	</pre>
</section>


<section id="mixin6">
	<h3>
		<a href="index.php?page=parametric Mixins"> Parametric Mixins </a>
	</h3>
</section>