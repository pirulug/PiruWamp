import queue

class Logger:
    def __init__(self):
        self.log_queue = queue.Queue()

    def log(self, message, service="System"):
        msg = f"[{service}] {message}"
        self.log_queue.put(msg)
        print(msg)

    def get_messages(self):
        messages = []
        while not self.log_queue.empty():
            messages.append(self.log_queue.get())
        return messages

logger = Logger()
