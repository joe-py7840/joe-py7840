import cv2
import mediapipe as mp 

cap = cv2.VideoCapture(0)
cap.set(3, 1200)
cap.set(4, 1200)
mp_hands = mp.solutions.hands
mp_draw = mp.solutions.drawing_utils

with mp_hands.Hands() as hands: 
	while True:
		ret, frame = cap.read()
		frameRGB = cv2.cvtColor(cv2.flip(frame, 1), cv2.COLOR_BGR2RGB)
		results = hands.process(frameRGB)
		print(results.multi_hand_landmarks)
		if results.multi_hand_landmarks:
			for hand_landmarks in results.multi_hand_landmarks:
				mp_draw.draw_landmarks(frame, hand_landmarks, mp_hands.HAND_CONNECTIONS)
		cv2.imshow("Live Video", frame)
		if cv2.waitKey(1) == ord("q"):
			break

cap.release()
cv2.destroyAllWindows()