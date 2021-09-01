import cv2
import numpy as np

blank = np.zeros((500, 500, 3), dtype=("uint8"))
#rectangle = cv2.rectangle(blank, (0, 0), (250, 250), (255, 0, 0), -1)
#circle = cv2.circle(blank, (250, 250), 100, (0, 255, 0), 3)
ellipse = cv2.ellipse(blank, (250, 250), (100, 50), 60, 0, 360, (0, 0, 255), 3)
cv2.imshow("Blank Image", blank)
cv2.waitKey(0)
