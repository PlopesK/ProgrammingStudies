def create_account():
    print("===== Create an Account =====")
    username = input("Enter your username: ")
    password = input("Enter your password: ")

    user_credentials[username] = password
    print("Account created successfully!\n")


def sign_in():
    print("===== Sign In =====")
    username = input("Enter your username: ")
    password = input("Enter your password: ")

    if username in user_credentials and user_credentials[username] == password:
        print("Sign in successful!\n")
    else:
        print("Invalid credentials. Please try again.\n")


if __name__ == "__main__":
    user_credentials = {}

    while True:
        print("1. Create an Account")
        print("2. Sign In")
        print("3. Exit")

        choice = input("Enter your choice (1/2/3): ")

        if choice == "1":
            create_account()
        elif choice == "2":
            sign_in()
        elif choice == "3":
            print("Exiting the program. Goodbye!")
            break
        else:
            print("Invalid choice. Please try again.\n")