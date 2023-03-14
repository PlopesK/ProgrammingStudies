import pyautogui
import time

pyautogui.PAUSE = 2
pyautogui.press("win")
pyautogui.write("navega")
time.sleep(4)
pyautogui.press("enter")
pyautogui.write("https://github.com/")
pyautogui.press("enter")
time.sleep(4)

pyautogui.click(x=1057, y=111)
pyautogui.write("PlopesK")
pyautogui.press("enter")
time.sleep(4)
pyautogui.click(x=330, y=532)
time.sleep(4)
pyautogui.click(x=524, y=256)