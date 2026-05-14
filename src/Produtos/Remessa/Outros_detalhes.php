<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * Outros detalhes da NF-e.
 *
 * @pw_element string $cNatOperacaoOd Natureza da Operação.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cIndicadorOd Indicador de Presença da Operação.<BR>Preenchimento Opcional.<BR><BR>1 - Operação presencial.<BR>2 - Operação não presencial, pela Internet.<BR>3 - Operação não presencial, Teleatendimento.<BR>4 - NFC-e em operação com entrega a domicílio.<BR>9 -Operação não presencial, outros.<BR><BR><BR>Se não informado, utilizaremos automaticamente o "9 - Outros".<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cIndicadorIntOd Indicador de Intermediador.<BR><BR>Preenchimento Opcional. <BR><BR>Esta informação deverá ser enviada quando se tratar de uma operação não presencial.<BR><BR>Opções disponíveis:<BR>   0=Operação sem intermediador(em site ou plataforma própria)<BR>   1=Operação em site ou plataforma de terceiros(intermediadores/marketplace)<BR><BR>Se não informado, utilizaremos automaticamente a opção "0-Operação sem intermediador(em site ou plataforma própria)".<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cCnpjIntOd CNPJ do Intermediador.<BR><BR>Preencimento obrigatório caso o Indicador de Intermediador seja igual a opção "1-Operação em site ou plataforma de terceiros(intermediadores/marketplace)".<BR><BR>Este campo representa o CNPJ do Intermediador da Transação.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cIdentificadorIntOd Identificação no Intermediador.<BR><BR>Preenchimento obrigatório caso o Indicador de Intermediador seja igual a opção "1-Operação em site ou plataforma de terceiros(intermediadores/marketplace)".<BR><BR>Este identificador pode ser o nome do usuário ou identificação do perfil do vendedor no site do intermediador.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $dDataSaidaOd Data de Saída.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cHoraSaidaOd Hora de Saída.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cCnpjCpfOd CNPJ / CPF (do recebedor).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cNomeOd Nome / Razão Social.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cInscrEstadualOd Inscrição Estadual.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cEnderecoOd Endereço.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cNumeroOd Número do endereço.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cComplementoOd Complemento do endereço.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cBairroOd Bairro.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cEstadoOd Estado.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cCidadeOd Cidade.<BR>Preenchimento Opcional.<BR><BR>Utilize o padrão: CIDADE (UF), como no exemplo:<BR><BR>"SAO PAULO (SP)"<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa.<BR><BR>Utilize a tag "cCod" do método "PesquisarCidades" da API<BR>http://app.omie.com.br/api/v1/geral/cidades/<BR>para obter essa informação.
 * @pw_element string $cCEPOd CEP.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cSepararEnderecoOd Separar endereço.   <BR>Valores possível S ou N, sendo N o padrão.<BR>Quando igual S separa do endereço o número o e complemento, caso existirem.
 * @pw_element string $cTelefoneOd Telefone.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cCnpjCpfOdRet CPF/CNPJ (Local de Retirada).<BR><BR>Preencimento opcional quando a mercadoria não está com o Emitente e deve ser retirada em outro local.<BR><BR>Este campo representa o CPF/CNPJ do responsável pela retirada da mercadoria. <BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cNomeOdRet Nome / Razão Social (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cInscrEstadualOdRet Inscrição Estadual (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cEnderecoOdRet Endereço (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cNumeroOdRet Número do endereço (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cComplementoOdRet Complemento do endereço (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cBairroOdRet Bairro (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cEstadoOdRet Estado (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cCidadeOdRet Cidade (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Utilize o padrão: CIDADE (UF), como no exemplo:<BR><BR>"SAO PAULO (SP)"<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa.<BR><BR>Utilize a tag "cCod" do método "PesquisarCidades" da API<BR>http://app.omie.com.br/api/v1/geral/cidades/<BR>para obter essa informação.
 * @pw_element string $cCEPOdRet CEP (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_element string $cSepararEnderecoOdRet Separar endereço.   <BR>Valores possível S ou N, sendo N o padrão.<BR>Quando igual S separa do endereço o número o e complemento, caso existirem.
 * @pw_element string $cTelefoneOdRet Telefone (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
 * @pw_complex outros_detalhes
 */
class Outros_detalhes{
	/**
	 * Natureza da Operação.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cNatOperacaoOd;
	/**
	 * Indicador de Presença da Operação.<BR>Preenchimento Opcional.<BR><BR>1 - Operação presencial.<BR>2 - Operação não presencial, pela Internet.<BR>3 - Operação não presencial, Teleatendimento.<BR>4 - NFC-e em operação com entrega a domicílio.<BR>9 -Operação não presencial, outros.<BR><BR><BR>Se não informado, utilizaremos automaticamente o "9 - Outros".<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cIndicadorOd;
	/**
	 * Indicador de Intermediador.<BR><BR>Preenchimento Opcional. <BR><BR>Esta informação deverá ser enviada quando se tratar de uma operação não presencial.<BR><BR>Opções disponíveis:<BR>   0=Operação sem intermediador(em site ou plataforma própria)<BR>   1=Operação em site ou plataforma de terceiros(intermediadores/marketplace)<BR><BR>Se não informado, utilizaremos automaticamente a opção "0-Operação sem intermediador(em site ou plataforma própria)".<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cIndicadorIntOd;
	/**
	 * CNPJ do Intermediador.<BR><BR>Preencimento obrigatório caso o Indicador de Intermediador seja igual a opção "1-Operação em site ou plataforma de terceiros(intermediadores/marketplace)".<BR><BR>Este campo representa o CNPJ do Intermediador da Transação.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cCnpjIntOd;
	/**
	 * Identificação no Intermediador.<BR><BR>Preenchimento obrigatório caso o Indicador de Intermediador seja igual a opção "1-Operação em site ou plataforma de terceiros(intermediadores/marketplace)".<BR><BR>Este identificador pode ser o nome do usuário ou identificação do perfil do vendedor no site do intermediador.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cIdentificadorIntOd;
	/**
	 * Data de Saída.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $dDataSaidaOd;
	/**
	 * Hora de Saída.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cHoraSaidaOd;
	/**
	 * CNPJ / CPF (do recebedor).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cCnpjCpfOd;
	/**
	 * Nome / Razão Social.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cNomeOd;
	/**
	 * Inscrição Estadual.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cInscrEstadualOd;
	/**
	 * Endereço.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cEnderecoOd;
	/**
	 * Número do endereço.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cNumeroOd;
	/**
	 * Complemento do endereço.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cComplementoOd;
	/**
	 * Bairro.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cBairroOd;
	/**
	 * Estado.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cEstadoOd;
	/**
	 * Cidade.<BR>Preenchimento Opcional.<BR><BR>Utilize o padrão: CIDADE (UF), como no exemplo:<BR><BR>"SAO PAULO (SP)"<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa.<BR><BR>Utilize a tag "cCod" do método "PesquisarCidades" da API<BR>http://app.omie.com.br/api/v1/geral/cidades/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCidadeOd;
	/**
	 * CEP.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cCEPOd;
	/**
	 * Separar endereço.   <BR>Valores possível S ou N, sendo N o padrão.<BR>Quando igual S separa do endereço o número o e complemento, caso existirem.
	 *
	 * @var string
	 */
	public string $cSepararEnderecoOd;
	/**
	 * Telefone.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cTelefoneOd;
	/**
	 * CPF/CNPJ (Local de Retirada).<BR><BR>Preencimento opcional quando a mercadoria não está com o Emitente e deve ser retirada em outro local.<BR><BR>Este campo representa o CPF/CNPJ do responsável pela retirada da mercadoria. <BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cCnpjCpfOdRet;
	/**
	 * Nome / Razão Social (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cNomeOdRet;
	/**
	 * Inscrição Estadual (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cInscrEstadualOdRet;
	/**
	 * Endereço (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cEnderecoOdRet;
	/**
	 * Número do endereço (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cNumeroOdRet;
	/**
	 * Complemento do endereço (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cComplementoOdRet;
	/**
	 * Bairro (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cBairroOdRet;
	/**
	 * Estado (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cEstadoOdRet;
	/**
	 * Cidade (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Utilize o padrão: CIDADE (UF), como no exemplo:<BR><BR>"SAO PAULO (SP)"<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa.<BR><BR>Utilize a tag "cCod" do método "PesquisarCidades" da API<BR>http://app.omie.com.br/api/v1/geral/cidades/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $cCidadeOdRet;
	/**
	 * CEP (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cCEPOdRet;
	/**
	 * Separar endereço.   <BR>Valores possível S ou N, sendo N o padrão.<BR>Quando igual S separa do endereço o número o e complemento, caso existirem.
	 *
	 * @var string
	 */
	public string $cSepararEnderecoOdRet;
	/**
	 * Telefone (Local de Retirada).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" da Remessa
	 *
	 * @var string
	 */
	public string $cTelefoneOdRet;
}
