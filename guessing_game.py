import random 
import threading

def game():
    number = random.randint(0, 500)
    tries = 1
    done = False

    while not done:
        guess = int(input("Enter a guess: "))
        if guess == number:
            print("you win!")
            break

        else:
            tries += 1
            if guess > number:
                print('The actual value is smaller than this.')
            else:
                print("The actual value is greater than this.")
    print(f'you needed {tries} tries.')

t = threading.Thread(target=game)
t.start()