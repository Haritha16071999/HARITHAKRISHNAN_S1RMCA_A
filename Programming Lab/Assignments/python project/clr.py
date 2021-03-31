import colorama
from colorama import Fore, Back, Style
colorama.init(autoreset=True)


msg = input("Enter Message here")
color = input("Enter color [RED, GREEN, BLUE, YELLOW, BLACK,WHITE ]")
color = color.upper()
print(getattr(Fore,color) + Back.YELLOW + msg)
