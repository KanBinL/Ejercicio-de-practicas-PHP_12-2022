@echo off
color f0
mode 23,10
cls
:menu
echo ========Menu========
echo.
echo 1. Apagar
echo 2. Reiniciar
echo 3. Cerra sesion
echo 4. Cancelar o Salir
echo.
echo ====================
choice /c 1234 /n /m "Elige una opcion"
if %errorlevel% == 1 goto 1
if %errorlevel% == 2 goto 2
if %errorlevel% == 3 goto 3
if %errorlevel% == 4 goto 4

:1
cls
echo =======Apagar=======
echo.
echo 1. Apagar ahora
echo 2. Apagar mas tarde
echo 3. Volver
echo.
echo ====================
choice /c 123 /n /m "Elige una opcion"
if %errorlevel% == 1 goto 1.1
if %errorlevel% == 2 goto 1.2
if %errorlevel% == 3 goto 1.3
:1.1
cls
SHUTDOWN /s /t 3
pause
goto menu
:1.2
cls
set /p tiempo1=Introduce tiempo(s) que quieres: 
SHUTDOWN /s /t %tiempo1%
pause
goto menu
:1.3
cls
goto menu

:2
cls
echo ======Reniciar======
echo.
echo 1. Reiniciar ahora
echo 2. Reiniciar mas tarde
echo 3. Volver
echo.
echo ====================
choice /c 123 /n /m "Elige una opcion"
if %errorlevel% == 1 goto 2.1
if %errorlevel% == 2 goto 2.2
if %errorlevel% == 3 goto 2.3
:2.1
cls
SHUTDOWN /r /t 3
pause
goto menu
:2.2
cls
set /p tiempo2=Introduce tiempo(s) que quieres: 
SHUTDOWN /r /t %tiempo2%
pause
goto menu
:2.3
cls
goto menu

:3
cls
echo =====Cerra sesion=====
echo.
echo 1. Cerra sesion ahora
echo 2. Volver
echo.
echo ======================
choice /c 12 /n /m "Elige una opcion"
if %errorlevel% == 1 goto 3.1
if %errorlevel% == 2 goto 3.2
:3.1
cls
SHUTDOWN /l
exit
:3.2
cls
goto menu

:4
cls
SHUTDOWN /a
exit

REM By KanBin
