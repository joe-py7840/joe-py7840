import cv2

cap = cv2.VideoCapture(0)
face_cascade = cv2.CascadeClassifier("haarcascade_frontalface_default.xml")

while True:
	_, frame = cap.read()
	gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)
	faces = face_cascade.detectMultiScale(gray, 1.1, 4)
	if faces is ():
		print("[+] No face detected")
	for (x, y, w, h) in faces:
		cv2.rectangle(frame, (x, y), (x+w, y+h), (255, 0, 0), 3)
		center_coordinates = x+w//2, y+h//2
		radius = h//2 
		cv2.circle(frame, (center_coordinates), radius, (0, 255, 0), 3)
		center_x, center_y = int(x+w/2), int(y+h/2)
		cv2.ellipse(frame, (center_x, center_y), (120, 70), 90, 0, 360, (0, 0, 255), 3)
	cv2.imshow("Live Video", frame)
	if cv2.waitKey(1) == ord("q"):
		break 

cap.release()
cv2.destroyAllWindows()