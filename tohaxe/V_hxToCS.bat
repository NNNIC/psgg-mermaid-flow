@echo off
cd %~dp0

echo :
echo : Remove Work Foloder
set /p a="Y or [enter] ? "

if "%a%"=="Y" (
    echo :rd /s /q out\cs
    rd /s /q out\cs 2>nul 
)

:_skiprd

echo : 
echo : ��ւ̂��߁Ahx/RegexUtil, hx/SortUtil ���폜
echo :

del /f src\lib\util\RegexUtil.hx 2>nul
del /f src\lib\util\SortUtil.hx 2>nul

echo :
echo : compile
echo : 
Haxe -p src -m start.Program  --cs out\cs 
echo : done
echo : 
echo : Do not run.
echo : Open by Visual Studio 2019
pause
start out\cs\Program.csproj
::out\cs\bin\Program.exe
::pause