from pyzbar.pyzbar import decode
from PIL import Image
import cv2
import time
import sys

file = sys.argv[1]

# klasa decoded_barcode dla łatwiejszego wywoływania danych, wystarczy dać jej zdjęcie na kótrym gdzieś jest kod kreskowy
class barcode_object:
    def __init__(self,img): # img = r"ścieżka do zdjęcia"
        decoded = decode(cv2.imread(img))
        for i in decoded:
            self.data    = i.data.decode("UTF-8")
            self.type    = i.type
            self.rect    = i.rect
            self.polygon = i.polygon

try:
    a = barcode_object(file)
    print(a.data)
except:
    print("ERROR")



# # mechanizm robienia zdjęcia
# vid = cv2.VideoCapture(0)  
# brk = True
# while brk:
#     # Capture the video frame
#     # by frame
#     ret, frame = vid.read()
#     # Display the resulting frame
#     cv2.imshow('frame', frame)
#     # mechanizm przycisków: q aby zrobić zdjęcie, y aby zatwierdzic, n aby powtorzyc
#     if cv2.waitKey(1) & 0xFF == ord('q'):
#         picture = cv2.imshow("frame",frame)
#         while True:
#             if cv2.waitKey(1) & 0xFF == ord('y') :
#                 brk = False
#                 break
#             elif cv2.waitKey(1) & 0xFF == ord('n'):
#                 brk = True
#                 break
# cv2.imwrite("mini_hackathon/live_cam.jpg",frame)
# cv2.destroyWindow("frame")
# identyfikacja kodu kreskowego i podział danych:
#-używanie klasy barcode_object-