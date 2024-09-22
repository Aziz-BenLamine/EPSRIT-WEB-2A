//EX1
const impairs = (tab) => {
  tab.filter((element) => element % 2 !== 0);
};

const newYearFormat = (date) => {
  const [year, month, day] = date.split("-");
  return `${day}/${month}/${year}`;
};

//EX2

const formaterChaine = (chaine) => {
  let chaineFormatee = chaine.replace(/[0-9]/g, "");
  chaineFormatee =
    chaineFormatee.charAt(0).toUpperCase() + chaineFormatee.slice(1);
  alert(chaineFormatee);
};
