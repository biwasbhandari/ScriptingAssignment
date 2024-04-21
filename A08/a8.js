function getCurrentDateTime() {
  const currentDate = new Date();
  const options = {
    weekday: "long",
    year: "numeric",
    month: "long",
    day: "numeric",
    hour: "numeric",
    minute: "numeric",
    second: "numeric",
    hour12: true,
  };
  const formattedDateTime = currentDate.toLocaleString("en-US", options);
  return formattedDateTime;
}

const currentDateTime = getCurrentDateTime();
console.log(`Current Date and Time: ${currentDateTime}`);
