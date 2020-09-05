# psgg-mermaid-flow
Convert StateGo Data File (*.psgg) to Mermaid-js Flow Markdown text.

# What it is.
This tool will convert [Code Mix Visual Programming StateGo](https://statego.programanic.com) data file to [Mermaid](https://mermaid-js.github.io/mermaid/#/) flow chart markdown text.

- StateGo State Chart
![]()

- Mrtmaid Flow Chart
![]()

# How to use

## Environment

Windows 10
Visual Studio 2019
StateGo (If you want to view StateGo File)

## Build 
Open psgg2mermaid\psgg2mermaid.sln using Visual Studio 2019
Build it.

## Usage

<pre>
fmt : psgg2mermaid PSGG_FILE OUTPUT [-c]
</pre>

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

- Mermaid output

### MazeControl.psgg (unity c#) 
- StateGo 

- Mermaid output

## TestControl.psgg (TyranoScript)
- StateGo 

- Mermaid output

