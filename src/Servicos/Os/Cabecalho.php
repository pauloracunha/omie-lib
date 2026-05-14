<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * Cabeçalho da Ordem de Serviço
 *
 * @pw_element string $cCodIntOS Código de Integração da OS
 * @pw_element integer $nCodOS Código da Ordem de Serviço
 * @pw_element string $cNumOS Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
 * @pw_element string $cCodIntCli Código de Integração do Cliente
 * @pw_element integer $nCodCli Código do Cliente
 * @pw_element string $dDtPrevisao Data de Previsão
 * @pw_element string $cEtapa Código da etapa do processo, sendo:<BR><BR>10 - Primeira coluna<BR>20 - Segunda coluna<BR>30 - Terceira coluna<BR>40 - Quarta coluna<BR>50 - Faturar
 * @pw_element integer $nCodVend Código do Vendedor
 * @pw_element integer $nQtdeParc Quantidade de Parcelas
 * @pw_element string $cCodParc Código da parcela/Condição de pagamento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag "nCodigo" do método "ListarFormasPagVendas" da API<BR>http://app.omie.com.br/api/v1/produtos/formaspagvendas/<BR>para obter essa informação.<BR><BR>O código "999" é o único que permite uma definição de forma de pagamento customizada. Caso você escolha essa opção, deve também informar a tag "qtde_parcelas" e a estrutura "lista_parcelas".<BR><BR>Alguns dos valores disponíveis são:<BR><BR>"000" - A Vista                                                     <BR>"A03" - Para 3 dias                                                 <BR>"A05" - Para 5 dias                                                 <BR>"A07" - Para 7 dias                                                 <BR>"A08" - Para 8 dias                                                 <BR>"A09" - Para 9 dias                                                 <BR>"A10" - Para 10 dias                                                <BR>"A13" - Para 13 dias                                                <BR>"A14" - Para 14 dias                                                <BR>"A15" - Para 15 dias                                                <BR>"A17" - Para 17 dias                                                <BR>"A20" - Para 20 dias                                                <BR>"A21" - Para 21 dias                                                <BR>"A25" - Para 25 dias                                                <BR>"A26" - Para 26 dias                                                <BR>"A28" - Para 28 dias                                                <BR>"A35" - Para 35 dias                                                <BR>"A36" - Para 36 dias                                                <BR>"A40" - Para 40 dias                                                <BR>"A42" - Para 42 dias                                                <BR>"A45" - Para 45 dias                                                <BR>"A50" - Para 50 dias                                                <BR>"A56" - Para 56 dias                                                <BR>"A60" - Para 60 dias                                                <BR>"A70" - Para 70 dias                                                <BR>"A75" - Para 75 dias                                                <BR>"A90" - Para 90 dias                                                <BR>"A98" - Para 98 dias                                                <BR>"B20" - Para 120 dias                                               <BR>"001" - 1 Parcela (para 30 dias)                                    <BR>"002" - 2 Parcelas                                                  <BR>"003" - 3 Parcelas                                                  <BR>"004" - 4 Parcelas                                                  <BR>"005" - 5 Parcelas                                                  <BR>"006" - 6 Parcelas                                                  <BR>"007" - 7 Parcelas                                                  <BR>"010" - 10 Parcelas                                                 <BR>"012" - 12 Parcelas                                                 <BR>"024" - 24 Parcelas                                                 <BR>"036" - 36 Parcelas                                                 <BR>"048" - 48 Parcelas                                                 <BR>"S01" - 30/60                                                       <BR>"S02" - 45/60                                                       <BR>"S03" - 21/28/35                                                    <BR>"S04" - 21/28/35/42                                                 <BR>"S05" - 28/35/42                                                    <BR>"S06" - 28/35/42/49                                                 <BR>"S07" - 30/45/60/75/90                                              <BR>"S08" - 25/56                                                       <BR>"S09" - 30/45                                                       <BR>"S10" - 28/56                                                       <BR>"S11" - 10/30/60                                                    <BR>"S12" - 15/30/60                                                    <BR>"S13" - 28/35                                                       <BR>"S14" - 7/14/21                                                     <BR>"S15" - 10/30/60/90                                                 <BR>"S16" - 60/90/120                                                   <BR>"S17" - 45/60/90                                                    <BR>"S18" - 30/60/90                                                    <BR>"S19" - 14/21                                                       <BR>"S20" - 7/14                                                        <BR>"S21" - 14/21/28                                                    <BR>"S22" - 45/75                                                       <BR>"S23" - 30/45/60                                                    <BR>"S24" - 3/20/40                                                     <BR>"S25" - 30/60/90/120                                                <BR>"S26" - 21/28                                                       <BR>"S27" - a Vista/15                                                  <BR>"S28" - a Vista/30                                                  <BR>"S29" - a Vista/30/60                                               <BR>"S30" - a Vista/30/60/90                                            <BR>"S31" - a Vista/30/60/90/120/150                                    <BR>"S41" - 28/42/56                                                    <BR>"S32" - 15/45/75                                                    <BR>"S33" - 14/28/42                                                    <BR>"S34" - 14/21/28/35/42                                              <BR>"S35" - 30/42/54/66/78/90                                           <BR>"S36" - 14/21/28/35                                                 <BR>"S37" - 28/42                                                       <BR>"S38" - 30/45/60                                                    <BR>"S39" - 35/42/49/56                                                 <BR>"S40" - 28/42/56/70                                                 <BR>"S42" - 30/40/50/60                                                 <BR>"S43" - 30/50/70/90                                                 <BR>"S44" - 14/28                                                       <BR>"S45" - 45/60/75/90                                                 <BR>"S46" - a Vista/30/60/90/120                                        <BR>"S47" - a vista/20/40/60                                            <BR>"S48" - 21/42                                                       <BR>"S49" - 15/30/45                                                    <BR>"S50" - 14/42                                                       <BR>"S51" - 21/35                                                       <BR>"S52" - 28/56/84                                                    <BR>"S53" - 28/42/56/70/84                                              <BR>"S54" - a Vista/30/45                                               <BR>"S55" - 21/45                                                       <BR>"S56" - a Vista/28                                                  <BR>"S57" - a Vista/60/90                                               <BR>"S58" - 35/45/55                                                    <BR>"S59" - 28/35/42/56                                                 <BR>"S60" - 30/45/60/75                                                 <BR>"S61" - 28/35/42/49/56                                              <BR>"S62" - 40/70/100                                                   <BR>"S63" - 42/56                                                       <BR>"S64" - a Vista/28/35                                               <BR>"S65" - 35/42                                                       <BR>"S66" - 20/40                                                       <BR>"S67" - a Vista/28/35/42
 * @pw_element string $cDescParc Descrição da parcela.<BR><BR>Utilizado apenas para retorno do método "ConsultarOS".
 * @pw_element decimal $nValorTotal Valor total da Ordem de Serviço.<BR><BR>Não deve ser informado na inclusão ou alteração.<BR>Campo calculado automaticamente.
 * @pw_element decimal $nValorTotalImpRet Valor Total de Impostos Retidos
 * @pw_element integer $nCodCtr Código do Contrato.<BR>Ao informar esse campo será incluído ao contrato uma Ordem de Serviço adicional.<BR><BR>Utilizado somente na Inclusão/Alteração.<BR><BR>Utilize a tag "nCodCtr" do método "ListarContrato" da API<BR>/api/v1/servicos/contrato/<BR>para obter essa informação<BR><BR>preenchimento opcional.
 * @pw_complex Cabecalho
 */
class Cabecalho{
	/**
	 * Código de Integração da OS
	 *
	 * @var string
	 */
	public string $cCodIntOS;
	/**
	 * Código da Ordem de Serviço
	 *
	 * @var integer
	 */
	public int $nCodOS;
	/**
	 * Número da Ordem de Serviço<BR>(Conforme visualizada em tela pelo cliente)<BR>
	 *
	 * @var string
	 */
	public string $cNumOS;
	/**
	 * Código de Integração do Cliente
	 *
	 * @var string
	 */
	public string $cCodIntCli;
	/**
	 * Código do Cliente
	 *
	 * @var integer
	 */
	public int $nCodCli;
	/**
	 * Data de Previsão
	 *
	 * @var string
	 */
	public string $dDtPrevisao;
	/**
	 * Código da etapa do processo, sendo:<BR><BR>10 - Primeira coluna<BR>20 - Segunda coluna<BR>30 - Terceira coluna<BR>40 - Quarta coluna<BR>50 - Faturar
	 *
	 * @var string
	 */
	public string $cEtapa;
	/**
	 * Código do Vendedor
	 *
	 * @var integer
	 */
	public int $nCodVend;
	/**
	 * Quantidade de Parcelas
	 *
	 * @var integer
	 */
	public int $nQtdeParc;
	/**
	 * Código da parcela/Condição de pagamento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag "nCodigo" do método "ListarFormasPagVendas" da API<BR>http://app.omie.com.br/api/v1/produtos/formaspagvendas/<BR>para obter essa informação.<BR><BR>O código "999" é o único que permite uma definição de forma de pagamento customizada. Caso você escolha essa opção, deve também informar a tag "qtde_parcelas" e a estrutura "lista_parcelas".<BR><BR>Alguns dos valores disponíveis são:<BR><BR>"000" - A Vista                                                     <BR>"A03" - Para 3 dias                                                 <BR>"A05" - Para 5 dias                                                 <BR>"A07" - Para 7 dias                                                 <BR>"A08" - Para 8 dias                                                 <BR>"A09" - Para 9 dias                                                 <BR>"A10" - Para 10 dias                                                <BR>"A13" - Para 13 dias                                                <BR>"A14" - Para 14 dias                                                <BR>"A15" - Para 15 dias                                                <BR>"A17" - Para 17 dias                                                <BR>"A20" - Para 20 dias                                                <BR>"A21" - Para 21 dias                                                <BR>"A25" - Para 25 dias                                                <BR>"A26" - Para 26 dias                                                <BR>"A28" - Para 28 dias                                                <BR>"A35" - Para 35 dias                                                <BR>"A36" - Para 36 dias                                                <BR>"A40" - Para 40 dias                                                <BR>"A42" - Para 42 dias                                                <BR>"A45" - Para 45 dias                                                <BR>"A50" - Para 50 dias                                                <BR>"A56" - Para 56 dias                                                <BR>"A60" - Para 60 dias                                                <BR>"A70" - Para 70 dias                                                <BR>"A75" - Para 75 dias                                                <BR>"A90" - Para 90 dias                                                <BR>"A98" - Para 98 dias                                                <BR>"B20" - Para 120 dias                                               <BR>"001" - 1 Parcela (para 30 dias)                                    <BR>"002" - 2 Parcelas                                                  <BR>"003" - 3 Parcelas                                                  <BR>"004" - 4 Parcelas                                                  <BR>"005" - 5 Parcelas                                                  <BR>"006" - 6 Parcelas                                                  <BR>"007" - 7 Parcelas                                                  <BR>"010" - 10 Parcelas                                                 <BR>"012" - 12 Parcelas                                                 <BR>"024" - 24 Parcelas                                                 <BR>"036" - 36 Parcelas                                                 <BR>"048" - 48 Parcelas                                                 <BR>"S01" - 30/60                                                       <BR>"S02" - 45/60                                                       <BR>"S03" - 21/28/35                                                    <BR>"S04" - 21/28/35/42                                                 <BR>"S05" - 28/35/42                                                    <BR>"S06" - 28/35/42/49                                                 <BR>"S07" - 30/45/60/75/90                                              <BR>"S08" - 25/56                                                       <BR>"S09" - 30/45                                                       <BR>"S10" - 28/56                                                       <BR>"S11" - 10/30/60                                                    <BR>"S12" - 15/30/60                                                    <BR>"S13" - 28/35                                                       <BR>"S14" - 7/14/21                                                     <BR>"S15" - 10/30/60/90                                                 <BR>"S16" - 60/90/120                                                   <BR>"S17" - 45/60/90                                                    <BR>"S18" - 30/60/90                                                    <BR>"S19" - 14/21                                                       <BR>"S20" - 7/14                                                        <BR>"S21" - 14/21/28                                                    <BR>"S22" - 45/75                                                       <BR>"S23" - 30/45/60                                                    <BR>"S24" - 3/20/40                                                     <BR>"S25" - 30/60/90/120                                                <BR>"S26" - 21/28                                                       <BR>"S27" - a Vista/15                                                  <BR>"S28" - a Vista/30                                                  <BR>"S29" - a Vista/30/60                                               <BR>"S30" - a Vista/30/60/90                                            <BR>"S31" - a Vista/30/60/90/120/150                                    <BR>"S41" - 28/42/56                                                    <BR>"S32" - 15/45/75                                                    <BR>"S33" - 14/28/42                                                    <BR>"S34" - 14/21/28/35/42                                              <BR>"S35" - 30/42/54/66/78/90                                           <BR>"S36" - 14/21/28/35                                                 <BR>"S37" - 28/42                                                       <BR>"S38" - 30/45/60                                                    <BR>"S39" - 35/42/49/56                                                 <BR>"S40" - 28/42/56/70                                                 <BR>"S42" - 30/40/50/60                                                 <BR>"S43" - 30/50/70/90                                                 <BR>"S44" - 14/28                                                       <BR>"S45" - 45/60/75/90                                                 <BR>"S46" - a Vista/30/60/90/120                                        <BR>"S47" - a vista/20/40/60                                            <BR>"S48" - 21/42                                                       <BR>"S49" - 15/30/45                                                    <BR>"S50" - 14/42                                                       <BR>"S51" - 21/35                                                       <BR>"S52" - 28/56/84                                                    <BR>"S53" - 28/42/56/70/84                                              <BR>"S54" - a Vista/30/45                                               <BR>"S55" - 21/45                                                       <BR>"S56" - a Vista/28                                                  <BR>"S57" - a Vista/60/90                                               <BR>"S58" - 35/45/55                                                    <BR>"S59" - 28/35/42/56                                                 <BR>"S60" - 30/45/60/75                                                 <BR>"S61" - 28/35/42/49/56                                              <BR>"S62" - 40/70/100                                                   <BR>"S63" - 42/56                                                       <BR>"S64" - a Vista/28/35                                               <BR>"S65" - 35/42                                                       <BR>"S66" - 20/40                                                       <BR>"S67" - a Vista/28/35/42
	 *
	 * @var string
	 */
	public string $cCodParc;
	/**
	 * Descrição da parcela.<BR><BR>Utilizado apenas para retorno do método "ConsultarOS".
	 *
	 * @var string
	 */
	public string $cDescParc;
	/**
	 * Valor total da Ordem de Serviço.<BR><BR>Não deve ser informado na inclusão ou alteração.<BR>Campo calculado automaticamente.
	 *
	 * @var decimal
	 */
	public float $nValorTotal;
	/**
	 * Valor Total de Impostos Retidos
	 *
	 * @var decimal
	 */
	public float $nValorTotalImpRet;
	/**
	 * Código do Contrato.<BR>Ao informar esse campo será incluído ao contrato uma Ordem de Serviço adicional.<BR><BR>Utilizado somente na Inclusão/Alteração.<BR><BR>Utilize a tag "nCodCtr" do método "ListarContrato" da API<BR>/api/v1/servicos/contrato/<BR>para obter essa informação<BR><BR>preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nCodCtr;
}
