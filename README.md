# psgg-mermaid-flow
Convert StateGo Data File (*.psgg) to Mermaid-js Flow Markdown text.

# What it is.
This tool will convert [Code Mix Visual Programming StateGo](https://statego.programanic.com) data file to [Mermaid](https://mermaid-js.github.io/mermaid/#/) flow chart markdown text.

- StateGo State Chart
![](https://raw.githubusercontent.com/NNNIC/psgg-mermaid-flow/master/wiki/statego.png)

- Mermaid Flow Chart
![](https://raw.githubusercontent.com/NNNIC/psgg-mermaid-flow/master/wiki/mermeid.png)

# How to use

## Environment

Windows 10  
Visual Studio 2019  
StateGo (If you want to view StateGo Data File)  

## Build 
Open psgg2mermaid\psgg2mermaid.sln using Visual Studio 2019  
Build it.  

## Usage

```format
psgg2mermaid PSGG_FILE OUTPUT [-c]
```

PSGG_FILE : StateGo Data File (*.psgg)  
OUTPUT : This tool output text file.   
-c : (Option) Each node contains source code.  

# Test

1. Execute the batch :
<pre>
test.bat
</pre>

This batch will convert from files in "testdata" folder to text files in "testdata_out"

2. Open to [Mermaid Live Editor](https://mermaid-js.github.io/mermaid-live-editor/)

3. Open a file in "testdata_out" folder then copy and paste to the editor.

You will see a flow.

## Result 

### FizzBuzzControl.psgg (php)
- StateGo 
![](https://raw.githubusercontent.com/NNNIC/psgg-mermaid-flow/master/wiki/fizzbuzz.png)

- Mermaid output
![](https://raw.githubusercontent.com/NNNIC/psgg-mermaid-flow/master/wiki/fizzbuzz-m.png)

- Mermaid output with code option
![](https://raw.githubusercontent.com/NNNIC/psgg-mermaid-flow/master/wiki/fizzbuzz-mc.png)

### MazeControl.psgg (unity c#) 
- StateGo 
![](https://raw.githubusercontent.com/NNNIC/psgg-mermaid-flow/master/wiki/maze.png)

- Mermaid output
![](https://raw.githubusercontent.com/NNNIC/psgg-mermaid-flow/master/wiki/maze-m.png)

## TestControl.psgg (TyranoScript)
- StateGo 
![](https://raw.githubusercontent.com/NNNIC/psgg-mermaid-flow/master/wiki/test.png)

- Mermaid output
![](https://raw.githubusercontent.com/NNNIC/psgg-mermaid-flow/master/wiki/test-m1.png)
![](https://raw.githubusercontent.com/NNNIC/psgg-mermaid-flow/master/wiki/test-m2.png)

